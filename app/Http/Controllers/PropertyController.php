<?php

namespace App\Http\Controllers;

use App\Property;
use App\Review;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        $properties = Property::all();
        session()->flash('activeness', 'properties');
        return view('admin.properties.index',['properties'=>$properties]);
    }
    public function create(){
        session()->flash('activeness', 'properties');
        return view('admin.properties.create');
    }
    public function store(){
        $property = new Property();
        $property->head = request('head');
        $property->head_uz = request('head_uz');
        $property->body_uz = request('body_uz');
        $property->body = request('body');
        if(request('image')){
            $image = request('image')->store('uploads');
            $property->image = $image;
        }else{
            return back();
        }
        $property->save();

        session()->flash('activeness', 'properties');
        return redirect()->route('properties');
    }
    public function update(Property $property){
        $property->head = request('head');
        $property->body = request('body');

        $property->head_uz = request('head_uz');
        $property->body_uz = request('body_uz');
        if(request('image')){
            unlink("storage/".$property->getRawOriginal('image'));

            $image = request('image')->store('uploads');
            $property->image = $image;
        }
        $property->save();
        session()->flash('activeness', 'properties');
        return redirect()->route('properties');
    }

    public function edit(Property $property){
        session()->flash('activeness', 'properties');
        return view('admin.properties.edit', ['property'=>$property]);
    }

    public function destroy(Property $property){
        unlink("storage/".$property->getRawOriginal('image'));

        $property->delete();
        session()->flash('activeness', 'properties');
        return back();
    }
}
