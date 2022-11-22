<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*Agregado */
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;



class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

function __construct()
{
    $this->middleware('permission:ver-rol | crear-rol | editar-rol | borrar-rol', ['only'=>['index']]);
    $this->middleware('permission:crear-rol', ['only'=>['create', 'store']]);
    $this->middleware('permission:editar-rol', ['only'=>['edit', 'update']]);
    $this->middleware('permission:borrar-rol', ['only'=>['destroy']]);
}

    public function index()
    {
        //En la variable roles se guarda un total de 5 registros con paginación y luego retorna la vista roles.index
        //que es accesible con el compact roles
        $roles = Role::paginate(5);
        return view ('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        $permission = Permission::get();
        return view ('roles.crear', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //validar los campos
        $this->validate($request, ['name' => 'required', 'permission' => 'required']);

        //guardar los campos y retornar la vista
        $role = Role::create(['name'=> $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Guarda en la variable el contenido de la clase Role que se encontró en base al id
        $role = Role::find($id);

        //Guarda en la variable los permisos obtenidos
        $permission = Permission::get();

        //Realiza la consulta en la base de datos
        $rolePermissions = DB::table('role_has_permissions')->where ('role_has_permissions.role_id', $id)
        ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        ->all();

        return view ('roles.editar', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //validar los campos
        $this->validate($request, ['name' => 'required', 'permission' => 'required']);

        //Buscar el campo con esa id y guardarlo en la variable
        $role = Role::find($id);

        //guardar los campos y retornar la vista
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Consulta la base de datos y elimina conforme al ID
        DB::table('roles')->Where('id', $id)->delete();

        return redirect()->route('roles.index');
    }
}
