<?php

namespace Products;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table="products";
    protected $fillable = array(
        'id',
        'name'
    );
}
