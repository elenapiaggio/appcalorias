<?php namespace AppCalorias\Http\Requests;

use AppCalorias\Http\Requests\Request;

class ProfileFormRequest extends Request {

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
            'birthdate' => 'required',
            'height' => 'required|min:100|max:220', // altura en cm
            'weight' => 'required|min:40|max:200', // peso en kg
            'sex' => 'required|in:female,male',// de esta forma los valores validos solo pueden ser femala y male
        ];
	}

}
