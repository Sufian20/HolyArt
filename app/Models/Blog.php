<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'user_id',
        'slug',
        'blog_title',
        'blog_image',
        'blog_des',

    ];

    function user(){

        return $this->belongsTo('App\Models\Blog', 'user_id');
    }


}
