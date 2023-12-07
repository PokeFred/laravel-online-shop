<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected string $name = "";
    protected string $description = "";
    protected float $price = 0;
    protected float $discountPercentage = 0;
    protected int $stock = 0;
    protected string $brand = "";
    protected string $category = "";
    protected string $thumbnail = "";
    protected $fillable = [
        "name",
        "description",
        "price",
        "discountPercentage",
        "stock",
        "brand",
        "category",
        "thumbnail"
    ];
}
