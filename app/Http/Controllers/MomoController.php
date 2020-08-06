<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Momo;

class MomoController extends Controller
{
    public function index(){
        
    $momos = Momo::all();
    return view('momos.index',['momos'=>$momos]);
    }

    public function show($id)
    {
        $momos = Momo::findORFail($id);
        return view('momos.show',['momos'=>$momos]);
    }
    public function create()
    {
        //dd(resquest(''))
        return view('momos.create');
    }

    public function store()
    {
        $momo = new Momo();
        $momo->type=request('type');
        $momo->quantity=request('quantity');
        $momo->flavour=request('flavour');
        $momo->save();
        return redirect('/')->with('msg','Thanks for Ordering Momo Have a great day:)');
    }

    public function destroy($id)
    {
        $momo = Momo::findORFail($id);
        $momo->delete();
        return redirect('/momos');
    }


    
}
