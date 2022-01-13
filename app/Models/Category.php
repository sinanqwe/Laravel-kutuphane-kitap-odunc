<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $appends = [
        'parent',
    ];

    #one to many
    public function books()
    {
        return $this->hasMany('App\Http\Models\Books');
    }

    /*public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childern(){
        return $this->belongsTo(Category::class, 'parent_id');
    }*/
}
