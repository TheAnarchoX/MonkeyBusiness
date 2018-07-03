<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable= ['title', 'body', 'img_path', 'slug', 'publication_date'];

    /**
     * Scope a query to only include published news items
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query) {
        return $query->where('publication_date', '<=', now());
    }

    /**
     * Scope a query to only include not yet published news items
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnpublished($query) {
        return $query->where('publication_date', '>', now());
    }

    public function author() {
        return $this->belongsTo(User::class, "author_id");
    }
}
