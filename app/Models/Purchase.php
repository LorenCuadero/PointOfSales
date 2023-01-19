<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Purchase extends Model {
    protected $fillable = [
        'name',
        'total',
        'tax',
    ];
    use HasFactory;

    public function products() {

        return $this->belongsToMany( Product::class )->withPivot(
            'qty', 'sub_total'
        );
    }
}
