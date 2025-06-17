<?php

// app/Models/Order.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'recipient_name',
        'recipient_phone',
        'recipient_address',
        'recipient_province',
        'recipient_city',
        'recipient_district',
        'recipient_postal_code',
        'courier',
        'courier_service',
        'product_price',
        'shipping_cost',
        'total_price',
        'weight_in_grams',
        'status',
    ];

    /**
     * Get the product associated with the order.
     */
    public function product()
    {
        return $this->belongsTo(Obat::class, 'product_id');
    }
}