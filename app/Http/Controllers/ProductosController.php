<?php namespace Epos\Http\Controllers;

use Epos\Http\Requests;
use Epos\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Producto;

class ProductosController extends Controller {

    protected $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos = DB::table('productos')
            ->join('marca', 'productos.id_marca', '=', 'marca.id')
            ->select('productos.id','productos.nombre','productos.descripcion_corta','productos.descripcion','marca.nombre as marca','productos.modelo','productos.precio_costo','productos.precio_venta','productos.stock','productos.estado')
            ->paginate();

        return view('productos.index', compact('productos'));
        //return dd($productos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productos.nuevo');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$producto = new Producto($request->all());

        $producto->save();

        return redirect()->route('productos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto = Producto::findOrFail($id);

        return view('productos.modificar', compact('producto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$producto = Producto::findOrFail($id);
        $producto->fill(Request::all());
        $producto->save();

        return dd($producto);
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

}
