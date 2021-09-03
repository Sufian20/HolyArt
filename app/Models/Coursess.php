<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coursess extends Model
{
    use HasFactory;
    use SoftDeletes;

  
    protected $fillable = [

        'coursess_img',
        'instractor_img',
        'coursess_name',
        'instractor_name',
        
    ];


}
