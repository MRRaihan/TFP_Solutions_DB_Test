<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'provider_id',
        'description',
        'unit_price',
        'image',
        'status',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
