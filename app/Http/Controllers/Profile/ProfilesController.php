<?php namespace AppCalorias\Http\Controllers\Profile;

use AppCalorias\Http\Requests;
use AppCalorias\Http\Controllers\Controller;

use AppCalorias\UserProfile;
use Illuminate\Http\Request;

class ProfilesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //return 'index';
        $usersprofiles = UserProfile::paginate();
      //  return view('admin.users.index', compact('users'));
       return view('food.formulario');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('profile.form.create');
	}

    /** Store a newly created resource in storage.
     *  @return Response
     */
    public function store(ProfileFormRequest $request) // le pasamos el Request con inyección de dependencia
    {
        // las reglas de validación están en UserProfileFormRequest

        //dd('Hi, datos correctos'); // esta linea solo se imprimirá si enviamos los datos correctos
        // porque sino cumple las reglas de validación automáticamente nos
        // redirige a la página anterior

        $user = UserProfile::create($request->all());
        return redirect()->route('profile.form.index');
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
