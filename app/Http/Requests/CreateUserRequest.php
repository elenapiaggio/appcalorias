<?php namespace AppCalorias\Http\Requests;

use AppCalorias\Http\Requests\Request;

class CreateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}


	/**
	 * Get the validation rules that apply to the request.
	 * @return array
	 */
	public function rules()
	{
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email', // unique: tabla users, columna email
            'password' => 'required',
            //'type' => 'required'				// de esta forma cualquiera podria cambiar los valores del select
            // por ejemplo por un valor: super admin
            // lo cual seria un desastre xk ese usuario podria volverse administrador
            // de nuestra app y cambiar y/o eliminar cosas de nuestra app

            'type' => 'required|in:user,admin' 	// de esta forma los valores validos solo pueden ser user y admin
            // así evitamos que se envien valores diferentes a los que debemos permitir
            // por si alguna persona quiere crackear nuestra app
            // así se evita que se cambien los valores por ejemplo por super admin o administrador
            //
        ];
	}

}
