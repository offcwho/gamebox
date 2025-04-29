<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'price'
    ];
    protected $table = 'products';

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'is_new' => 'boolean'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function Cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
