<?php namespace AppCalorias\Http\Controllers\Admin;

use AppCalorias\Http\Requests;
use AppCalorias\Http\Controllers\Controller;
use AppCalorias\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UsersController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
        return view('profile.form');
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

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        /*Construyo un User a partir del id recibido
         lo busca y si no lo encuentra me da un error 404
        */
        $user = User::findOrFail($id);

        $user->fill($request->all());
        $user->save();

        // Genero un mensaje de confirmación conforme se ha guardado con éxtio
        Session::flash('message', 'User => "'.$user->first_name. '" fue modificado con éxito!!!');

        //dd('factor actividad: '.$this->getCalcularFactorActividad($user));
        // dd('El calculo de calorias que necesitas es: '. $kcal_diarias);

        // Aplico fórmula para calcular kcal diarias que necesita un usuario
        $kcal_diarias = $this -> getCalcularKcalDiarias($user);

        // Calculo el Peso Ideal
        $peso_ideal = $this -> getPesoIdeal($user);

        // Calculo el IMC
        $imc = $this -> getIMC($user);

        // Devuelvo la vista mostrarcalorias y le envio el usuario
        return view('profile.showkcaldiarias', compact('user','peso_ideal', 'kcal_diarias', 'imc'));

	}

    /**
     * Método para calcular el peso ideal de un User
     * @param $user
     */
    public function getPesoIdeal($user){

    }

    /**
     * Método para calcular el IMC
     * (Índice de masa corporal)
     * @param $user
     */
    public function getIMC($user){
        // Fórmula IMC = peso(en kilos) / (altura)*(estatura) en metros
        $imc = ($user->weight) / ( ($user->height)/100 ) * (($user->height)/100 );
        return $imc;

    }

    /**
     * Método para calcular el consumo diario
     * de calorias que necesita una persona según
     * sus características físicas
     * @param $user Objeto de tipo user
     * @return string
     */
    public function getCalcularKcalDiarias($user){

        // Si el User es Mujer
        if($user->sex === 'female'){
            // dd('female');
            //return 'female';
            $caloriasdiarias = $this->esMujer($user);
        }
        // Si el User es Hombre
        else{
            // dd('male');
            //return 'male';
            $caloriasdiarias = $this->esHombre($user);
        }

        return $caloriasdiarias;
    }

    /**
     * Cálculo de calorías diarias para mujeres
     * @param $user un Usuario
     */
    public function esMujer($user){
        $factoractividad = $this->getCalcularFactorActividad($user);
        //Mujeres  [655 + (9.6 x Peso kg) ] +  [ (1.8 x Altura cm) – (4.7 x Edad)] x Factor actividad
        $result = (655 + (9.6 * $user->weight)) + (1.8 * $user->height) - (4.7 * $user->getAgeAttribute()) * $factoractividad;
        return $result;
    }

    /**
     * Cálculo de calorías diarias para hombres
     * @param $user un Usuario
     */
    public function esHombre($user){
        $factoractividad = $this->getCalcularFactorActividad($user);
        //Hombres  [66 + (13.7 x Peso kg) ] + [ (5 x Altura cm) – (6.8 x Edad)] x Factor actividad
        $result = (66 + (13.7 * $user->weight)) + (5 * $user->height) - (6.8 * $user->getAgeAttribute()) * $factoractividad;
        return $result;

    }

    /**
     * Método que calcula el factor de actividad
     * @param $user Usuario
     */
    public function getCalcularFactorActividad($user){

        $tipoactividad = $user->type_activity;

        // Personas sedentarias (hace poca actividad física): 1.2
        if($tipoactividad === 'sedentary'){
            $factoractividad = 1.2;
        }
        // Actividad ligera (hace actividad físisca 1 a 3 veces por semana): 1.375
        elseif($tipoactividad === 'light'){
            $factoractividad = 1.375;
        }

        // Actividad moderada (hace actividad físisca 3 a 5 veces por semana): 1.55
        elseif($tipoactividad === 'moderate'){
            $factoractividad = 1.55;
        }

        // Actividad intensa (hace actividad física 6 a 7 veces por semana): 1.725
        elseif($tipoactividad === 'intense'){
            $factoractividad = 1.725;
        }

        // Actividad extremadamente alta (atletas profesionales mucha actividad física): 1.9
        elseif($tipoactividad === 'extremely_high'){
            $factoractividad = 1.9;
        }

        // Actividad incorrecta
        else{
            dd('No existe la acitividad');
        }

        return $factoractividad;
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
