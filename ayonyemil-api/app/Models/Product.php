<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected function fotoProduk(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($fotoProduk) => asset('/storage/images/product/' . $fotoProduk)
    //     );
    // }
}
