<?php

namespace App\Http\Controllers;

use App\Certificate;
use Illuminate\Http\Request;
use ZipStream\File;

class CertificateController extends Controller
{

    public function index(){
        session()->flash('activeness', 'certificates');
        $certificates = Certificate::orderBy('created_at', 'desc')->paginate(\request('size'));
        return view('admin.certificates.index', ['certificates'=> $certificates]);
    }
    public function create(){
        session()->flash('activeness', 'certificates');
        return view('admin.certificates.create');
    }
    public function store(){
        session()->flash('activeness', 'certificates');
        $certificate = new Certificate();
        if(request('image')){
            File::delete($this->image);
            $image = request('image')->store('uploads');
            $certificate->image = $image;
        }else{
            return back();
        }
        $certificate->save();
        return redirect()->route('certificates');
    }
    public function update(Certificate $certificate){
        session()->flash('activeness', 'certificates');
        if(request()->has('image')){
            unlink("storage/".$certificate->getRawOriginal('image'));
            $image = request('image')->store('uploads');
            $certificate->image = $image;
        }else{
            return back();
        }
        $certificate->save();
        return redirect()->route('certificates');
    }
    public function edit(Certificate $certificate){
        session()->flash('activeness', 'certificates');
        return view('admin.certificates.edit',['certificate'=>$certificate]);
    }
    public function destroy(Certificate $certificate){
        unlink("storage/".$certificate->getRawOriginal('image'));

        $certificate->delete();
        session()->flash('activeness', 'certificates');
        return back();
    }

}
