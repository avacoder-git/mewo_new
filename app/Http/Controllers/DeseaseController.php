<?php

namespace App\Http\Controllers;

use App\Desease;
use Illuminate\Http\Request;

class DeseaseController extends Controller
{
    public function index(){
        session()->flash('activeness','deseases');
        $deseases = Desease::all();
        return view('admin.deseases.index', ['deseases'=>$deseases]);
    }
    public function update(Desease $desease){

        $desease->head = request('head');
        $desease->head_uz = request('head_uz');
        $desease->body = request('body');
        $desease->body_uz = request('body_uz');
        $desease->save();
        session()->flash('activeness','deseases');
        return redirect()->route('deseases');
    }
    public function edit(Desease $desease){
        session()->flash('activeness','deseases');
        return view('admin.deseases.edit',['desease'=>$desease]);
    }
}
