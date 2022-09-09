<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class SetLocalLanguage
{
	public function handle(Request $request, Closure $next): Response|RedirectResponse|JsonResponse
	{
		$lang = session('lang', 'en');
		app()->setLocale($lang);
		return $next($request);
	}
}
