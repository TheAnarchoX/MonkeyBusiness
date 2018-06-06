<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'title', 'description', 'slug', 'target', 'event_date', 'location', 'author'
    ];

    public function author() {
        return $this->belongsTo(User::class, 'author');
    }
}
