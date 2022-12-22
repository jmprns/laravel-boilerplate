<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasName
{
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => $attributes["first_name"]." ".$attributes["last_name"]
        );
    }
}
