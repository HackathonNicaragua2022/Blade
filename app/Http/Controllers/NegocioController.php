<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
use Illuminate\Http\Request;

/**
 * Class NegocioController
 * @package App\Http\Controllers
 */
class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $negocios = Negocio::paginate();

        return view('negocio.index', compact('negocios'))
            ->with('i', (request()->input('page', 1) - 1) * $negocios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $negocio = new Negocio();
        return view('negocio.create', compact('negocio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Negocio::$rules);

        $negocio = Negocio::create($request->all());

        return redirect()->route('negocios.index')
            ->with('success', 'Negocio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $negocio = Negocio::find($id);

        return view('negocio.show', compact('negocio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $negocio = Negocio::find($id);

        return view('negocio.edit', compact('negocio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Negocio $negocio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Negocio $negocio)
    {
        request()->validate(Negocio::$rules);

        $negocio->update($request->all());

        return redirect()->route('negocios.index')
            ->with('success', 'Negocio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $negocio = Negocio::find($id)->delete();

        return redirect()->route('negocios.index')
            ->with('success', 'Negocio deleted successfully');
    }
}
