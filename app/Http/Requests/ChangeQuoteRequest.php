<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChangeQuoteRequest extends FormRequest
{
	public function rules()
	{
		return [
			'title_en'       => 'required',
			'title_ka'       => 'required',
			'movie_id'       => ['required', Rule::exists('movies', 'id')],
		];
	}
}
