<?php namespace AppCalorias\Http\Controllers\Food;

use AppCalorias\Food;
use AppCalorias\Property;
use AppCalorias\Group;
use AppCalorias\Http\Requests;
use AppCalorias\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // return 'FoodsController.php';
        $foods = Food::paginate();
        return view('food.index', compact('foods'));
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
        return view('food.create');
	}

    public function store(Request $request)
    {
       $food = Food::create($request->all());
        $food = save();
        redirect()->route('food.index');
    }

    /**
     * Store a newly created resource in storage.
     * @param CreateFoodRequest $request -> "Request" con inyección de dependencia
     *
     * @return \Illuminate\View\View
     */
    /*public function store(FoodRequests $request)
    {
        // las reglas de validación están en FoodRequests
        dd('Datos correctos ... Redirect to: Index'); // esta linea solo se imprimirá si enviamos los datos correctos
        // porque sino cumple las reglas de validación automáticamente nos
        // redirige a la página anterior
        $food = Food::create($request->all());
        return redirect()->route('food.index');
    }
    */

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

    /**
     *
     */
    public function countCalories()
    {
        //return 'countCalories';
        return view('food.formulariocount');
    }

}
