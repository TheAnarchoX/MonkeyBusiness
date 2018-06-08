<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    public function author() {
        return $this->belongsTo(User::class, 'author');
    }
}
