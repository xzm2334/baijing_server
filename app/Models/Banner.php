<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
        'categories_id',
        

    ];
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
