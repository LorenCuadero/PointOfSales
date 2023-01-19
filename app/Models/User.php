<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Employee;
use App\Models\Company;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    // One to One
    // We named it comp since kung ang model name among gamiton naay error

    public function comp() {
        return $this->hasOne( Company::class );
    }

    // One to Many
    public function employees() {
        return $this->hasMany( Employee::class );
    }
    // another function call for employee for getting the latest.

    public function firstEmployee() {
        return $this->employees()->take( 1 )->get();
    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
