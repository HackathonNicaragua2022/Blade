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
            
            //Tabla usuarios

            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //Tabla categorias

            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',

            //Tabla negocios
            'ver-negocio',
            'crear-negocio',
            'editar-negocio',
            'borrar-negocio',

            //Tabla redes sociales
            'ver-redes',
            'crear-redes',
            'editar-redes',
            'borrar-redes',

            //Tabla productos

            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto',

        ];

        foreach ($permisos as $permiso){
            Permission::create(['name' => $permiso]);
        }

    }
}
