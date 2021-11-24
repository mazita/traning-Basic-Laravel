<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getAttachmentUrlAttribute()
    {
        //$todo->attachment_url
        return asset('storage/'.$this->attachment);
    }
}
