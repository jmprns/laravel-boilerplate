<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ACLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // roles
        $role = Role::create(['name' => 'admin']);

        $account = Account::factory()->admin()->create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        $account->assignRole($role);
    }
}
