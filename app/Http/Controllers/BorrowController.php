<?php

namespace App\Http\Controllers;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $filmIN=DB::table('films')
        ->select('available')
        ->where('id','=',request('filmID'))
        ->value('available');

        if($filmIN==0)
            return redirect('/borrow/fail');

        $taken=DB::table('borrows')
        ->select(DB::raw('count(ID)'))
        ->where('customerID','=',request('customerID'))
        ->whereNull('in')
        ->groupBy('customerID')
        ->value('count(ID)');
        if(is_null($taken)) $taken=0;

        $rang=DB::table('customers')
        ->select('rank')
        ->where('ID','=',request('customerID'))
        ->value('rank');
        $maxBorrow=0;
        if($rang<5) $maxBorrow=1;
        if($rang/5==1) $maxBorrow=2;
        if($rang/5==2) $maxBorrow=3;
        if($rang>=15) $maxBorrow=4;
        if($maxBorrow>$taken){
        Borrow::create([
            'customerID' => request('customerID'),
            'filmID' => request('filmID'),
            'out' => request('out'),
            'in' => request('in')
        ]);
        return redirect('/borrow');
        }
        else{
            // echo $taken;
            // echo $maxBorrow;
            // echo $rang;
            return redirect('/borrow/fail');
        }
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

    public function instantReturn(Borrow $borrow)
    {
        $borrow->update([
            'in' => date("Y-m-d")
        ]);
        $rang=DB::table('customers')
        ->select('rank')
        ->where('ID','=',$borrow->customerID)
        ->value('rank');
        $borrowPeriod=0;
        if($rang<5) $borrowPeriod=2*3600*24;
        if(intdiv($rang,5)==1) $borrowPeriod=3*3600*24;
        if(intdiv($rang,5)==2) $borrowPeriod=5*3600*24;
        if($rang>=15) $borrowPeriod=10*3600*24;
        $period=strtotime(date("Y-m-d"))-strtotime($borrow->out);
        //$fee=(strtotime(date("Y-m-d"))-strtotime($period))/(24*60*60)*500;
        //$fee=min($fee,5000);
        if($period>$borrowPeriod)
        {
            $fee=(($period-$borrowPeriod)/(3600*24)-2)*500;
            $fee=min($fee,5000);
            return redirect('/borrow')->with('success',$fee);
        }
        return redirect('/borrow');
    }
}
