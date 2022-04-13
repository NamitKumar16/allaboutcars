<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|string|null $request)
 * @method static firstWhere(string $string, array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|string|null $request)
 */
class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
