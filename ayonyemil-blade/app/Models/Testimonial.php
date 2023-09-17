<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected function fotoCustomer(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($fotoCustomer) => asset('/storage/images/customer/' . $fotoCustomer)
    //     );
    // }
}
