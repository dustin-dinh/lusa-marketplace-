<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str; //Xử lý chuỗi

class CategoryController extends Controller
{
    public function index() //Lấy danh sách catecó trong
    {
        return Category::all();
    }

    public function store(Request $request) //Tao moi danh muc
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories'
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name) //Tự động chuyển đổi slug
        ]);

        return response()->json([
            'message' => 'Tạo thư mục thành công',
            'data' => $category
        ], 201);
    }

    public function show(string $id) //Xem chi tiet
    {
        $category = Category::find($id);

        if(!$category)
            {
                return response()->json(['message' => 'Không tìm thấy danh mục'], 404);
            }
        return $category;
    }

    public function update(Request $request, string $id)
    {
        $category = Category::find($id);

        if(!$category)
            {
                return response()->json(['message' => "Không tìm thấy danh mục sản phẩm"]);
            }
        $request->validate([
            'name' => 'string|max:255|unique:categories,name,'. $id, //Cho phép trùng tên cũ của chính nó
        ]);
            $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name) //Cap nhat
        ]);

        return response()->json([
            'message' => 'Cập nhật thành công',
            'data' =>$category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Không tìm thấy danh mục'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Xóa thành công']);
    }
}
