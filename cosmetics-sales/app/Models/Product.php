<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'code',
        'name',
        'description',
        'image_url',
        'price',
        'slug'
    ];

    protected $dates = ['deleted_at'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id')->withTimestamps();
    }

   // Trong model Product
public function category()
{
    return $this->belongsTo(Category::class, 'category_name', 'name');
}

public function orderDetails()
{
    return $this->hasMany(OrderDetail::class);
}

}
