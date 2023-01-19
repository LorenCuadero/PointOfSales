<?php

namespace App\Models;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $fillable = [
        'name',
        'price',
        'stock'
    ];
    use HasFactory;

    public function purchase()
    {

        return $this->belongsToMany( Purchase::class );
    }
}
