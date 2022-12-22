<?php

namespace App\Models;

use App\Traits\HasName;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasName;

    protected $guarded = [];
    protected $hidden = ['password'];

    public function user()
    {
        return $this->morphTo();
    }
}
