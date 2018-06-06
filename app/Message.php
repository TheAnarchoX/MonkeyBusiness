<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = ['name', 'email', 'mobile_number', 'subject', 'message'];

    /**
     * Scope a query to only include read messages
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRead($query) {
        return $query->where('is_read', '1');
    }
    /**
     * Scope a query to only include unread messages
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnread($query) {
        return $query->where('is_read', '0');
    }

}
