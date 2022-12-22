<?php

namespace App\Providers;

use App\Models\Account;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootMorphMap();
    }

    private function bootMorphMap(): void
    {
        Relation::enforceMorphMap([
            'admin' => Admin::class,
            'user'  => User::class,
            'account' => Account::class,
        ]);
    }
}
