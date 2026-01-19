<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
protected $fillable = [
        'category_id', 'name', 'slug', 'description',
        'price', 'stock', 'image', 'is_active'
    ];

    // Sản phẩm thuộc về 1 danh mục
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Sản phẩm có thể nằm trong nhiều dòng của đơn hàng (chi tiết đơn hàng)
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
