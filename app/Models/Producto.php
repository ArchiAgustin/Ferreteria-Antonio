<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    public function cat(){
    	return $this->hasOne(CategoProduct::class, 'id', 'category_id');
    }


}
