<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function projects(){
        return $this->hasMany(Project::class,'categories_id');
    }
    public function banners(){
        return $this->hasMany(Banner::class,'categories_id');
    }
}
