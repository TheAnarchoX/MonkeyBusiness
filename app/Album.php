<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    protected $fillable = [
        'name', 'description', 'author'
    ];

    public function author() {
        return $this->belongsTo(User::class, 'author');
    }

    public function photos() {
        return $this->BelongsToMany(Photo::class, 'photos_albums');
    }
}
