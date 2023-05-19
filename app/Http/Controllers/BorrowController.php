<?php

namespace App\Http\Controllers;
use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $borrows=Borrow::all();
        return view('borrow.index', compact('borrows'));
    }

    public function show(Borrow $borrow)
    {
        //$post = Post::findOrFail($id);
        return view('borrow.show', compact('borrow'));
    }

    public function create()
    {
        return view('borrow.create');
    }

    public function store()
    {
        Borrow::create([
            'customerID' => request('customerID'),
            'filmID' => request('filmID'),
            'out' => request('out'),
            'in' => request('in')
        ]);
        return redirect('/borrow');
    }

    public function edit(Borrow $borrow)
    {
        return view('borrow.edit', compact('borrow'));
    }

    public function update(Borrow $borrow)
    {
        $borrow->update([
            'customerID' => request('customerID'),
            'filmID' => request('filmID'),
            'out' => request('out'),
            'in' => request('in')
        ]);
        return redirect('/borrow');
    }

    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
        return redirect('/borrow');
    }
}
