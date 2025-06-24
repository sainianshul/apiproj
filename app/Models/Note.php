<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'is_bookmarked'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
