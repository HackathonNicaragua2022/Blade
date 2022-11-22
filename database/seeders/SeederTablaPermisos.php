<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permisos de usuario

        $permisos = [
            //Tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Tabla categorias

            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',
        ];

        foreach ($permisos as $permiso){
            Permission::create(['name' => $permiso]);
        }

    }
}
