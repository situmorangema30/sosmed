<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function postm() { return $this->belongsTo(Post::class, 'post_id', 'id'); }
    public function userm() { return $this->belongsTo(User::class, 'user_id', 'id'); }
}