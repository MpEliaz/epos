<?php namespace Epos\Http\Controllers;

use Carbon\Carbon;
use Epos\Models\Producto;
use Epos\Models\Venta;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class VentasController extends Controller {

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
		return view('ventas.index');
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
	public function store(Request $request)
	{
        $productos = $request->all();

        $productos = $productos['detalle_venta'];
        $venta_data = array(
            'nro_venta' 	=> 0,
            'fecha_venta' => Carbon::now(),
            'tipo_pago' => 'contado',
            'estado_venta' => 1,
            'total_venta' => 0,
            'id_vendedor' => null,
            'id_cliente' => null
        );
        $venta = Venta::create($venta_data);
        foreach($productos as $p){
            $venta->productos()->attach($p['id'], ['cantidad'=>$p['cant_venta']]);

        }

        return Response::json($venta);
        

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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
