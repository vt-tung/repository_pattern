<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    public    $timestamps = true;
    protected $fillable = [
        'name'
    ];
    protected $primaryKey = 'id';
    protected $table      = 'attr';
}
