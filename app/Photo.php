<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['title', 'description', 'img_path', 'slug', 'author_id'];

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function albums() {
        return $this->BelongsToMany(Album::class, 'photos_albums');
    }

    public function inAlbum() {
        return $this->albums()->count() > 0;
    }
}
