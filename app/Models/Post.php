<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model {

    use SoftDeletes;

    protected $fillable = [
        'title', 'body', 'author_id', 'slug', 'status'
    ];

    public function user() {
        return $this->belongsTo(\App\User::class, 'author_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id');
    }

}
