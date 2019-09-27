<?php

namespace Products;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
   
    protected $table="products";
     //
     protected $primaryKey = 'id';

    protected $fillable = ['name','type'];
   // protected $guarded = [];
}
