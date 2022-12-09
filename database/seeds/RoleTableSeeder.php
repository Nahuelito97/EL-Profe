<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleTableSeeder extends Seeder
{
    public function run()
    {
      $role1 = Role::create(['name' => 'SuperAdmin']);
      $role2 = Role::create(['name' => 'Admin']);


      Permission::create(['name' => 'admin.dashboard'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);

      Permission::create(['name' => 'admin.studentss.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.studentss.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.studentss.show'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.studentss.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.studentss.destroy'])->syncRoles([$role1]);


      Permission::create(['name' => 'admin.profesorss.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.profesorss.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.profesorss.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.profesorss.destroy'])->syncRoles([$role1]);



      Permission::create(['name' => 'admin.especialityy.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.especialityy.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.especialityy.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.especialityy.destroy'])->syncRoles([$role1]);

    }
}
