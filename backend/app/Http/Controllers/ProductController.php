<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{

    public function index(Request $request) //Lay danh sach san pham kem ten danh muc
    {
        $query = Product::with('category');
        //Khi tim theo ten
        if ($request->has('name'))
            {
                $query->where('name', 'like', '%' .$request->name . '%');
            }

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->has('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $query->orderBy('created_at', 'desc');

        return response()->json($query->paginate(20));


    }
    public function store(Request $request)
    {
    $request->validate([
            'category_id' => 'required|exists:categories,id', // ID danh mục phải tồn tại
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string'
        ]);

    $product = Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name) . '-' . Str::random(5),
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => 'no-image.jpg'
        ]);

    return response()->json([
            'message' => 'Tạo sản phẩm thành công',
            'data' => $product
        ], 201);
    }

    public function show(string $id)
    {
    $product = Product::with('category')->find($id);
        if (!$product) {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }

        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }

        $request->validate([
            'category_id' => 'exists:categories,id',
            'name' => 'string|max:255',
            'price' => 'numeric|min:0',
            'stock' => 'integer|min:0'
        ]);

        $product->update([
            'category_id' => $request->category_id ?? $product->category_id,
            'name' => $request->name ?? $product->name,
            'slug' => $request->name ? Str::slug($request->name) . '-' . Str::random(5) : $product->slug,
            'description' => $request->description ?? $product->description,
            'price' => $request->price ?? $product->price,
            'stock' => $request->stock ?? $product->stock,
        ]);

        return response()->json([
            'message' => 'Cập nhật thành công',
            'data' => $product
        ]);
    }


    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Xóa thành công']);
    }
}
