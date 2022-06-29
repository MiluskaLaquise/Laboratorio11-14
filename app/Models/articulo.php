<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class articulo extends MongoModel
{
    use HasFactory;
    protected $fillable=[
        'descripcion',
        'email'
    ];
    public function categorias(){
        return $this->belongsTo(categoria::class,'categoria_id','_id');
    }

}
