<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
      $role_user = Role::where('name','user')->first();
      $role_admin = Role::where('name','admin')->first();

      $user = new User();
      $user-> name = "User";
      $user->email = "user@mail.com";
      $user->password = bcrypt('query');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user-> name = "Nahuel Wagner";
      $user->email = "elprofe@gmail.com";
      $user->password = bcrypt('12345');
      $user->save();
      $user->roles()->attach($role_admin);
    }
}
