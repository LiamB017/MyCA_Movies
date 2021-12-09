<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //get the admin role and attach the user to the admin role
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Liam Bedford';
        $admin->email = 'liam@movies.ie';
        $admin->password = Hash::make('password');
        $admin->save();
        // here we attach the admin role to the admin
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Jon Jones';
        $user->email = 'jon@movies.ie';
        $user->password = Hash::make('password');
        $user->save();
        // attach the user role to this user
        $user->roles()->attach($role_user);
    }
}
