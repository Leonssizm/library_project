<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function authors():BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }

    public function scopeSearch($query, $searchTerm)
    {
    return $query->where(function ($query) use ($searchTerm) {
        $query->where('title', 'like', '%' . $searchTerm . '%')
              ->orWhereHas('authors', function ($query) use ($searchTerm) {
                  $query->where('name', 'like', '%' . $searchTerm . '%');
              });
    });
    }
}
