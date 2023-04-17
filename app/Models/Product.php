<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title','price','pic','description','created_at'];
    public function pictures(){
        return $this->hasMany(Picture::class,'product_id');
    }
}
