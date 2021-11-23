<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [

            //Operaciones sobre tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

        ];

        $role=Role::create(['name'=>'Super Admin']);

        foreach ($permisos as $permiso) {
            $permission = Permission::create(['name'=>$permiso]);
            $role->givePermissionTo($permission);
        }

        $permisosRRHH1 = [

            //Operaciones para Recursos Humanos
            'ver-empresa',
            'crear-empresa',
            'editar-empresa',
            'borrar-empresa',
        ];

        $permisosRRHH2 = [

            //Operaciones para Administrador Recursos Humanos
            'ver-trabajador',
            'crear-trabajador',
            'editar-trabajador',
            'borrar-trabajador',
        ];

        $permisosRRHH3 = [

            //Operaciones para Administrador Recursos Humanos
            'ver-',
            'crear-',
            'editar-',
            'borrar-',
        ];

        $roleRRHH=Role::create(['name'=>'RRHH-admin']);

        foreach ($permisosRRHH1 as $permiso) {
            $permission = Permission::create(['name'=>$permiso]);
            $roleRRHH->givePermissionTo($permission);
            $role->givePermissionTo($permission);
        }

        foreach ($permisosRRHH2 as $permiso) {
            $permission = Permission::create(['name'=>$permiso]);
            $roleRRHH->givePermissionTo($permission);
            $role->givePermissionTo($permission);
        }
    }
}
