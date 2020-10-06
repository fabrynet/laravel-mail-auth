<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'name',
      'short_desc',
      'desc',
      'price',
      'qty',
      'img'
    ];
}
