<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','category_id','content','quantity','price','path','user_id'];

    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

