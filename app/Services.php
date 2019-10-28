<?php

namespace Products;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    protected $table="services";
     //
     protected $primaryKey = 'id';
    
    protected $fillable = ['origenServ','destinoServ','descripcionServ','url_Imagen','userServ'];
}
