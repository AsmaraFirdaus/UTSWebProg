<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $guarded = [];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_categories');
    }
}
