<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'id', 'author_id');
    }
}
