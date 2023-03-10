<?php

namespace App\Traits;

use App\Models\Account;

trait HasAccount
{
    public function account()
    {
        return $this->morphOne(Account::class, 'user');
    }
}
