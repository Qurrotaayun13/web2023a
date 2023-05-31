<?php

namespace App\Http\Controllers;

use App\Models\Apoteker;
use Illuminate\Http\Request;

class ApotekerController extends Controller
{
    public function index(){
        $apoteker = Apoteker::all();
        return view('apoteker.index',compact(['apoteker']));
}
    public function create()
    {
        return view('apoteker.create');
    }
    public function store(Request $request)
    {
       //dd($request->except(['_token','submit'])); 
       apoteker::create($request->except(['_token','submit']));
       return redirect('/apoteker');
    }
    public function edit($id)
    {
        //dd($id);
        $apoteker = Apoteker::find($id);
        return view('apoteker.edit',compact(['apoteker']));
    }
    public function update($id, Request $request)
    {
        $apoteker = Apoteker::find($id);
        $apoteker->update($request->except(['_token','submit']));
        return redirect('/apoteker');
    }
    public function destroy($id)
    {
        $apoteker = Apoteker::find($id);
        $apoteker->delete();
        return redirect('/apoteker');
    }

 

}