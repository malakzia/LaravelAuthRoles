<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role_user = Role::where('name', 'user')->first();
        $role_author = Role::where('name', 'author')->first();
$role_admin  = Role::where('name', 'admin')->first();

$user = new User();
$user->name = 'Employee Name';
$user->email = 'user@gmail.com';
$user->password = bcrypt('secret');
$user->save();
$user->roles()->attach($role_user);
$admin = new User();

$admin->name = 'Manager Name';
$admin->email = 'admin@gmail.com';
$admin->password = bcrypt('secret');
$admin->save();
$admin->roles()->attach($role_admin);


$author = new User();
$author->name = 'Manager Name';
$author->email = 'author@gmail.com';
$author->password = bcrypt('secret');
$author->save();
$author->roles()->attach($role_admin);

    }
}
