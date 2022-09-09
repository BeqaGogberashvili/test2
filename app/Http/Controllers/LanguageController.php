<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class LanguageController extends Controller
{
	public function change(string $locale): RedirectResponse|Response
	{
		if (in_array($locale, config('app.available_locales')))
		{
			session()->put('lang', $locale);
		}
		else
		{
			session()->put('lang', 'en');
		}
		return back();
	}
}
