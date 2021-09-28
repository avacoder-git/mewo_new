<?php

namespace App\Http\Controllers;

use App\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    public function index(){
        $general = General::latest()->first();
        return view('admin.general.index', ['general'=>$general]);
    }
    public function store(General $general){
        $general->phone1 = request('phone1');
        $general->phone2 = request('phone2');
        $general->instagram = request('instagram');
        $general->telegram = request('telegram');
        $general->whatsapp = request('whatsapp');
        $general->youtube = request('youtube');
        $general->address = request('address');
        $general->email = request('email');
        $general->save();
        return back();
    }
}
