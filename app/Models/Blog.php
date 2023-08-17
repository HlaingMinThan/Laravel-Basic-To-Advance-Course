<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function scopeSearch($query, $searchValue)
    {
        return $query
            ->when($searchValue, function ($query) use ($searchValue) {
                $query
                    ->where(function ($query) use ($searchValue) {
                        $query->where('title', 'Like', '%' . $searchValue . '%')
                            ->orWhere('body', 'Like', '%' . $searchValue . '%');
                    });
            });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author() // user has many blogs
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
