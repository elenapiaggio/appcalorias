<?php namespace AppCalorias\Http\Controllers\Food;

use AppCalorias\Http\Requests;
use AppCalorias\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AppCalorias\Food;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use AppCalorias\Group;


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
        // dd($request->all()); // Muestro los datos que traigo con $request
        $food = new Food($request->all());
        $food->save();
        $foods = Food::paginate();
        return view('food.index', compact('foods'));
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
        $food = Food::findOrFail($id);
        // retornamos la vista food.editar y le enviamos el objeto generado
        return view('food.show', compact('food'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        // Creo un solo objeto a partir de $id,
        // findOrFail busca el objeto (ese registro) y no lo encuentra
        // lanza un error 404
        $food = Food::findOrFail($id);
        // retornamos la vista food.editar y le enviamos el objeto generado
        return view('food.editar', compact('food'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(Request $request, $id)
    {
        $food = Food::findOrFail($id);

        $food->fill($request->all());
        $food->save();

        // Genero un mensaje de confirmación cuando se modifica el alimento
        Session::flash('message', 'Alimento => "'.$food->name. '" fue modificado con éxito!!!');

        // Creo un array con todos los alimentos
        $foods = Food::paginate();
        // se lo envio a la Vista index para volver a imprimirlos
        return view('food.index', compact('foods'));


    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
       // return $id;
        // Busco el registro con el Id = $id, si no lo encuentra da un error 404
        $food = Food::findOrFail($id);
        $food->delete();
        Session::flash('message', 'Alimento => "'.$food->name. '" fue eliminado!!!');

        $foods = Food::paginate();
        return view('food.index', compact('foods'));
    }

    /**
     *
     */
    public function countCalories()
    {
        $foods = Food::paginate();
        return view('food.cuentacalorias', compact('foods'));


    }

}
