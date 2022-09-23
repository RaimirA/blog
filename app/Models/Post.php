<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

//    protected $with = ['category', 'author']; //This will eager load the relationships every time you fetch a post
//    protected $fillable = ['title', 'excerpt', 'body'];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

//    public static function create(array $attributes)
//    {
//        $p = new Post($attributes);
//        $p->save();
//    }
}
