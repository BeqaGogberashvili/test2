<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
	public function rules()
	{
		return [
			'title_en' => 'required',
			'title_ka' => 'required',
		];
	}
}
