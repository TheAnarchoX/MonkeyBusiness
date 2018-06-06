<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name', 'description', 'email', 'phone_number', 'website', 'author'];

    public function author() {
        return $this->belongsTo(User::class, 'author');
    }
}
