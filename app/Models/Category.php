<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at'];

    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class, 'user_id');
    }
}
