<?php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // The attributes that are mass assignable.
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'user_id',
    ];
    public $timestamps = true;
}