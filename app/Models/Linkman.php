<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linkman extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'qr_image',
        'skill',
        'position',
        'company',
        'phone'

    ];
}
