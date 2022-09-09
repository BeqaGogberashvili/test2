<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MovieController extends Controller
{
	public function store(StoreMovieRequest $request): RedirectResponse
	{
		$movie = new Movie;
		$translations = ['en' => $request->title_en, 'ka' => $request->title_ka];
		$movie->setTranslations('title', $translations);
		$movie->save();
		return redirect()->route('movie.list');
	}

	public function show(Movie $movie): View
	{
		return view('posts.movies', [
			'movies' => Quote::where('movie_id', $movie->id)->get(),
			'name'   => $movie->title,
		]);
	}

	public function edit(Movie $movie): View
	{
		return view('posts.edit-movies', [
			'movie'  => $movie,
		]);
	}

	public function update(StoreMovieRequest $request, Movie $movie): RedirectResponse
	{
		$translations = ['en' => $request->title_en, 'ka' => $request->title_ka];
		$movie->setTranslations('title', $translations);
		$movie->save();
		return redirect()->route('movie.list');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return redirect()->route('movie.list');
	}
}
