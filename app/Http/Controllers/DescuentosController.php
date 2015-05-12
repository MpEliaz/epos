<?php namespace Epos\Http\Controllers;

use Epos\Http\Requests;
use Epos\Http\Controllers\Controller;
use Epos\Models\Descuento;
use Illuminate\Support\Facades\Request;

class DescuentosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$descuentos = Descuento::all();
        return view('descuentos.index', compact('descuentos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $descuentos = Descuentos::findOrFail($id);
        return dd($descuentos);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $descuento = Descuento::findOrFail($id);
        return view('descuentos.modificar', compact('descuento'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $desc = Descuento::findOrFail($id);
        $desc->fill(Request::all());
        if ($desc->estado == 'on')
        {
            $desc->estado = true;
        }
        else
        {
            $desc->estado = false;
        }
        $desc->save();

        return redirect()->back()->with('message','Modificado correctamente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function get_desc()
    {
        $descuento = Request::get('cod_desc');
        $desc = Descuento::where('codigo_descuento','=',$descuento)->get();
        return response()->json($desc);

    }

}
