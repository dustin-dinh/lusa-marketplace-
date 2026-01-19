<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];

    // Chi tiết này thuộc về đơn hàng nào
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Chi tiết này là của sản phẩm nào
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
