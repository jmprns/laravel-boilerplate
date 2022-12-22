<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Worker;
use App\Models\Citizen;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ACLSeeder::class,
            UserSeeder::class
        ]);
    }
}
