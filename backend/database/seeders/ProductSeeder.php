<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Lấy tất cả danh mục vừa tạo
        $categories = Category::all();

        foreach ($categories as $category) {
            // Với mỗi danh mục, tạo đúng 10 sản phẩm
            for ($i = 1; $i <= 10; $i++) {
                $name = $category->name . " - Mẫu " . $i; // VD: Laptop - Mẫu 1

                Product::create([
                    'category_id' => $category->id,
                    'name' => $name,
                    'slug' => Str::slug($name) . '-' . Str::random(4), // Slug duy nhất
                    'description' => "Mô tả chi tiết cho sản phẩm thuộc nhóm " . $category->name . ". Đây là sản phẩm demo số " . $i . " dùng để kiểm thử hệ thống marketplace.",
                    'price' => rand(100, 5000) * 10000, // Giá ngẫu nhiên từ 1tr đến 50tr (số đẹp)
                    'stock' => rand(10, 200), // Tồn kho từ 10 đến 200
                    'image' => 'https://via.placeholder.com/400x400.png?text=' . Str::slug($category->name) . '+' . $i // Ảnh có chữ tên sp
                ]);
            }
        }
    }
}
