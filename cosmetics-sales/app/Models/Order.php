<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_date',
        'order_number',
        'total',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
