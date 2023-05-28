<?php

namespace App\Http\Controllers;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function index()
    {
        $films=Film::all();
        return view('film.index', compact('films'));
    }

    public function show(Film $film)
    {
        //$post = Post::findOrFail($id);
        return view('film.show', compact('film'));
    }

    public function create()
    {
        return view('film.create');
    }

    public function store()
    {
        Film::create([
            'title' => request('title'),
            'director' => request('director'),
            'star' => request('star'),
            'category' => request('category'),
            'ptype' => request('ptype'),
            'available' => true
        ]);
        return redirect('/film');
    }

    public function edit(Film $film)
    {
        return view('film.edit', compact('film'));
    }

    public function update(Film $film)
    {
        $film->update([
            'title' => request('title'),
            'director' => request('director'),
            'star' => request('star'),
            'category' => request('category'),
            'ptype' => request('ptype')
        ]);
        return redirect('/film');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect('/film');
    }

    public function search()
    {
        $keyword='%'.request('keyword').'%';
        $key=request('key');
        $films = DB::table('films')
        ->select('title','director','star','category', DB::raw("count(id) as db"))
        ->where($key,'like',$keyword)
        ->groupBy('title','director','star','category')
        ->get();
        return view('film.search', compact('films'));
    }
    public function result(string $selectedTitle,string $selectedDirector)
    {
        $films = DB::table('films')
        ->select('*')
        ->where('title','like',$selectedTitle)
        ->where('director','like',$selectedDirector)
        ->get();
        return view('film.result', compact('films'));
    }
}
