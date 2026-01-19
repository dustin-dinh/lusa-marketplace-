<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Danh sách 50 Category theo yêu cầu
        $categories = [
            // 1. NHÓM CÔNG NGHỆ
            'Điện thoại thông minh', 'Laptop & Máy tính xách tay', 'Linh kiện máy tính', 'Thiết bị mạng',
            'Phụ kiện công nghệ', 'Thiết bị lưu trữ', 'Thiết bị chơi game', 'Camera & Webcam',
            'Thiết bị âm thanh', 'Thiết bị văn phòng',

            // 2. NHÓM Y TẾ
            'Dụng cụ y tế', 'Thiết bị đo sức khỏe', 'Thuốc không kê đơn', 'Thực phẩm chức năng',
            'Vật tư tiêu hao y tế', 'Thiết bị hỗ trợ hô hấp', 'Dụng cụ phục hồi chức năng',
            'Thiết bị chẩn đoán', 'Dụng cụ sơ cứu', 'Sản phẩm chăm sóc sức khỏe',

            // 3. NHÓM THỜI TRANG
            'Thời trang nam', 'Thời trang nữ', 'Giày dép', 'Túi xách', 'Phụ kiện thời trang',
            'Đồng hồ', 'Trang sức', 'Thời trang trẻ em', 'Đồ thể thao', 'Thời trang công sở',

            // 4. NHÓM NÔNG NGHIỆP
            'Nông sản tươi', 'Nông sản khô', 'Giống cây trồng', 'Phân bón', 'Thuốc bảo vệ thực vật',
            'Thiết bị nông nghiệp', 'Thức ăn chăn nuôi', 'Sản phẩm hữu cơ', 'Dụng cụ làm vườn',
            'Sản phẩm chế biến từ nông sản',

            // 5. NHÓM NỘI THẤT
            'Nội thất phòng khách', 'Nội thất phòng ngủ', 'Nội thất phòng bếp', 'Nội thất văn phòng',
            'Đồ trang trí nội thất', 'Đèn trang trí', 'Rèm cửa', 'Thảm trải sàn', 'Tủ kệ các loại',
            'Nội thất thông minh'
        ];

        foreach ($categories as $catName) {
            Category::create([
                'name' => $catName,
                'slug' => Str::slug($catName)
            ]);
        }
    }
}
