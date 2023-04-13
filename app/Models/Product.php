<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title','price','pic','description'];
    public function picture(){
        return $this->belongsTo('Picture');
    }
}
