<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role1 = Role::create(['name' => 'Administrador']);
      $role2 = Role::create(['name' => 'Secretario']);
      $role3 = Role::create(['name' => 'Profesor']);
      $role4 = Role::create(['name' => 'Alumno']);


      Permission::create(['name' => 'admin.dashboard', 'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.users.index', 'description' => 'Ver el listado de usuarios'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.users.edit', 'description' => 'Editar los usuarios'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.users.update', 'description' => 'Actualizar los usuarios'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.studentss.index', 'description' => 'Ver listado de estudiantes'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.studentss.create', 'description' => 'Crear estudiantes'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.studentss.show', 'description' => 'Mostrar estudiantes'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.studentss.edit', 'description' => 'Editar estudiantes'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.studentss.destroy', 'description' => 'Eliminar estudiantes'])->syncRoles([$role1, $role2]);


      Permission::create(['name' => 'admin.profesorss.index', 'description' => 'Ver listado de profesores'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.profesorss.create', 'description' => 'Crear profesores'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.profesorss.edit', 'description' => 'Editar profesores'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.profesorss.destroy', 'description' => 'Eliminar profesores'])->syncRoles([$role1, $role2]);



      Permission::create(['name' => 'admin.especialityy.index', 'description' => 'Ver listado de especialidad'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.especialityy.create', 'description' => 'Crear especialidad'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.especialityy.edit', 'description' => 'Editar especialidad'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.especialityy.destroy', 'description' => 'Eliminar especialidad'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.users.destroy', 'description' => 'delete users'])->syncRoles([$role1]);

    }
}
