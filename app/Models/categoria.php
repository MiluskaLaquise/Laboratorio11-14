<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class categoria  extends MongoModel
{
    use HasFactory;

    public function  articulos(){
        return $this->hasMany(articulo::class,'categoria_id','_id');
    }


}
