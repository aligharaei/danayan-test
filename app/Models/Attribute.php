<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'color',
        'capacity',
        'price',
        'stock',
    ];

    public function product()
    {
        return $this->morphTo();
    }
}
