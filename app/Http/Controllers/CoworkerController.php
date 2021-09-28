<?php

namespace App\Http\Controllers;

use App\Coworker;
use Illuminate\Http\Request;

class CoworkerController extends Controller
{
    public function index(){
        session()->flash('activeness', 'coworkers');
        $coworkers = Coworker::orderBy('created_at', 'desc')->paginate(\request('size'));
        return view('admin.coworkers.index', ['coworkers'=> $coworkers]);
    }
    public function create(){
        session()->flash('activeness', 'coworkers');
        return view('admin.coworkers.create');
    }
    public function store(){
        session()->flash('activeness', 'coworkers');
        $coworkers = new Coworker();
        if(request('image')){
            $image = request('image')->store('uploads');
            $coworkers->image = $image;
        }
        $coworkers->save();
        return redirect()->route('coworkers');
    }
    public function update(Coworker $coworker){
        session()->flash('activeness', 'coworker');
        if(request('image')){
            unlink("storage/".$coworker->getRawOriginal('image'));
            $image = request('image')->store('uploads');
            $coworker->image = $image;
        }
        $coworker->save();
        return redirect()->route('coworkers');
    }
    public function edit(Coworker $coworker){
        session()->flash('activeness', 'coworkers');
        return view('admin.coworkers.edit',['coworker'=>$coworker]);
    }
    public function destroy(Coworker $coworker){
        unlink("storage/".$coworker->getRawOriginal('image'));

        $coworker->delete();
        session()->flash('activeness', 'coworkers');
        return back();
    }

}
