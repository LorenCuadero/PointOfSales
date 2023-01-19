<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
    protected $fillable = [
        'name',
        'address',
    ];

    use HasFactory;

    public function user() {
        return $this->belongsTo( User::class );
    }
}
