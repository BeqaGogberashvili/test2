<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuoteRequest extends FormRequest
{
	public function rules()
	{
		return [
			'title_en'       => 'required',
			'title_ka'       => 'required',
			'thumbnail'      => 'required|image',
			'movie_id'       => ['required', Rule::exists('movies', 'id')],
		];
	}
}
