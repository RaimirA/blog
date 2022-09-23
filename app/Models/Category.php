<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function create(array $attributes)
    {
        $c = new Category($attributes);
        $c->save();
        return $c;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


}
