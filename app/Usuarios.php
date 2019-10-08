<?php

namespace Products;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
     
    protected $table="users";
     //
     protected $primaryKey = 'id';
    
    protected $fillable = ['user','password','email','name','cedula','telefono','ciudad','estado'];
}
