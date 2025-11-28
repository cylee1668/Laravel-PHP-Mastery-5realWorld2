<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use SebastianBergmann\CodeCoverage\Node\Builder;


class Book extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function scopeTitle(Builder $query, string $title) :Builder
    {
        return $query->where('title', 'LIKE', '%' . $title . '%');
    }

    public function scopeAuthor(Builder $query, string $author) :Builder
    {
        return $query->where('author', 'LIKE', '%' . $author . '%');
    }
}
