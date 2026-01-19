<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
protected $fillable = ['user_id', 'total_amount', 'status', 'payment_method'];

    // Đơn hàng thuộc về 1 user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Đơn hàng có nhiều chi tiết sản phẩm bên trong
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
