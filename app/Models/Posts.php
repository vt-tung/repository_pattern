<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public    $timestamps = true;
    protected $fillable
                          = [
            'user_id', 'title', 'short_desc', 'desc', 'image', 'post_category_id', 'created_at', 'updated_at'
        ];
    protected $primaryKey = 'id';
    protected $table      = 'posts';
}
