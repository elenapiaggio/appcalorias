<?php namespace AppCalorias\Http\Requests;

use AppCalorias\Http\Requests\Request;

class FoodRequest extends Request {

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
	 *
	 * @return array
	 */
	public function rules()
	{
        return [
            //'required|min:100|max:220'
            'name' => 'required', // Nombre del alimento
            'property_id' => 'required',
            'group_id' => 'required'
        ];
	}

}
