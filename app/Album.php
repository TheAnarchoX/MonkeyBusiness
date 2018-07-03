<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    protected $fillable = [
        'name', 'description', 'author_id'
    ];

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function photos() {
        return $this->BelongsToMany(Photo::class, 'photos_albums');
    }
}
