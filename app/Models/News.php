<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author',
    ];

    public function author()
    {
        return $this->hasOne(Authors::class, 'id', 'authors_id');
    }

}
