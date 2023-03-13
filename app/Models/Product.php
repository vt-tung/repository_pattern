<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public    $timestamps = true;
    protected $fillable = [
            'name'
        ];
    protected $primaryKey = 'id';
    protected $table      = 'product';

    public function attr(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany('App\Models\Attr', 'attr_products', 'product_id', 'attr_id');
    }
}
