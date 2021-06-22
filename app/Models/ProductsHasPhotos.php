<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsHasPhotos extends Model
{
    use HasFactory;

    protected $table = 'products_has_photos';

    protected $primaryKey = 'id';

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'photo',
        'product_id',
    ];

}