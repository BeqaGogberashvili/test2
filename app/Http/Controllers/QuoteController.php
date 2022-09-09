<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeQuoteRequest;
use App\Models\Quote;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreQuoteRequest;

class QuoteController extends Controller
{
	public function store(StoreQuoteRequest $request)
	{
		request()->file('thumbnail')->store('images');
		$quote = new Quote();
		$translations = ['en' => $request->title_en, 'ka' => $request->title_ka];
		$quote->setTranslations('quote', $translations);
		$quote->thumbnail = request()->file('thumbnail')->store('images');
		$quote->movie_id = $request['movie_id'];
		$quote->save();
		return redirect()->route('quote.list');
	}

	public function edit(Quote $quote): View
	{
		return view('posts.edit-quotes', [
			'quote'  => $quote,
		]);
	}

	public function update(ChangeQuoteRequest $request, Quote $quote): RedirectResponse
	{
		if (isset($attributes['thumbnail']))
		{
			File::delete('storage/' . $quote->thumbnail);
			$attributes['thumbnail'] = request()->file('thumbnail')->store('images');
			$quote->thumbnail = request()->file('thumbnail')->store('images');
		}

		$translations = ['en' => $request->title_en, 'ka' => $request->title_ka];
		$quote->setTranslations('quote', $translations);
		$quote->movie_id = $request['movie_id'];

		$quote->save();
		return redirect()->route('quote.list');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		File::delete('storage/' . $quote->thumbnail);
		$quote->delete();
		return redirect()->route('quote.list');
	}
}
