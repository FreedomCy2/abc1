<?php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // The attributes that are mass assignable.
    protected $fillable = [
        'content',
        'post_id',
        'user_id',
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'id' => 'integer',
        'post_id' => 'integer',
        'user_id'
