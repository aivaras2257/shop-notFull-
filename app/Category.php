<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['name'];
    protected  $table = "categories";

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
