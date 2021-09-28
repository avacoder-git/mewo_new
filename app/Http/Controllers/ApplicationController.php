<?php

namespace App\Http\Controllers;

use App\Application;
use App\Exports\ApplicationExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ApplicationController extends Controller
{
    public function index(){
        $applications =   Application::orderBy('created_at', 'desc')->paginate(25);
        session()->flash('activeness', 'applications');
        return view('admin.zayavki', ['applications'=>$applications]);
    }

    public function deleteAll(){
        session()->flash('activeness', 'applications');

        foreach (Application::all() as $item) {
            $item->delete();
        }
        return back();
    }
    public function store(){
        $inputs = request()->validate([
           'name'=>'required',
           'phone'=>'required',
           'region'=>'required'
        ]);
        $application = new Application();
        $application->name = $inputs['name'];
        $application->phone = $inputs['phone'];
        $application->region = $inputs['region'];
        $application->save();
        session()->flash('activeness', 'applications');
        session()->flash('success', 'Success');
        return back();
    }
    public function destroy(Application $application){
        $application->delete();
        session()->flash('activeness', 'applications');
        return back();
    }

    public function export(){
        return Excel::download(new ApplicationExport(), 'zayavki.xlsx');

    }
}
