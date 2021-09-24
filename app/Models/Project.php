<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
       'name',
       'image_uil',
       'video_uil',
       'data',
       'hot',
       'cycle',
       'company',
       'money',
       'particulars',
       'show',
       'categories_id'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
