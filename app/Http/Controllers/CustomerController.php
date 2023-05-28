<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers=Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function show(Customer $customer)
    {
        //$post = Post::findOrFail($id);
        return view('customer.show', compact('customer'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store()
    {
        Customer::create([
            'name' => request('name'),
            'address' => request('address'),
            'contact' => request('contact'),
            'rank' => 0
        ]);
        return redirect('/customer');
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {
        $customer->update([
            'name' => request('name'),
            'address' => request('address'),
            'contact' => request('contact')
        ]);
        return redirect('/customer');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customer');
    }

    public function search()
    {
        $keyword='%'.request('keyword').'%';
        $key=request('key');
        $customers = DB::table('customers')
        ->select('*')
        ->where($key,'like',$keyword)
        ->get();
        return view('customer.search', compact('customers'));
    }
}
