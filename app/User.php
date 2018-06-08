<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    CONST AUTHOR = "author";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'img_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function activities() {
        return $this->HasMany(Activity::class, AUTHOR);
    }

    public function photos() {
        return $this->hasMany(Photo::class, AUTHOR);
    }

    public function albums() {
        return $this->hasMany(Album::class, AUTHOR);
    }

    public function news() {
        return $this->hasMany(News::class, AUTHOR);
    }

    public function partners() {
        return $this->HasMany(Partner::class, AUTHOR);
    }

    public function texts() {
        return $this->hasMany(Text::class, AUTHOR);
    }

    public function isContributor() {
        return $this->admin == "contributor" || $this->admin == "admin" || $this->admin == "superAdmin";
    }

    public function isAdmin() {
        return $this->admin == "admin" || $this->admin == "superAdmin";
    }

    public function isSuperAdmin() {
        return $this->admin == "superAdmin";
    }
}
