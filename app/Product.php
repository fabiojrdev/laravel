<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'exclusive'
    ];
    protected $dates = [
        'deleted_at'
    ];
    public function category()
    {

        return $this->belongsTo(Category::class);
    }
}
