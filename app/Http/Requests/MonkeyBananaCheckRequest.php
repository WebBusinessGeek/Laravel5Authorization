<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Http\Response;

class MonkeyBananaCheckRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		 return $this->input('monkeyId') == $this->input('bananaOwner');
	}

	public function forbiddenResponse(){

		return new Response('That monkey is not allowed to eat other monkey\'s bananas', 403);

	}

}
