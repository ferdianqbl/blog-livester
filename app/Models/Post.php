<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, $req)
    {
        $query->when($req->search, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', "%$search%")
                    ->orWhere('body', 'like', "%$search%");
            });
        });

        $query->when($req->category, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('id', $category);
            });
        });

        $query->when($req->author, function ($query, $author) {
            return $query->whereHas('user', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
