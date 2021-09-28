<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function index(){
        session()->flash('activeness', 'videos');
        $videos = Video::orderBy('created_at', 'desc')->paginate(\request('size'));
        return view('admin.videos.index', ['videos'=> $videos]);
    }

    public function create(){
        session()->flash('activeness', 'videos');
        return view('admin.videos.create');
    }
    public function store(){
        $videos = new Video();
        if(request('image')) {
            $image = request('image')->store('uploads');
            $videos->image = $image;
        }else{
            return back();
        }
        $videos->link = request('link');
        $videos->save();
        session()->flash('activeness', 'videos');
        return redirect()->route('videos');
    }


    public function update(Video $video){
        if(request('image')){
            unlink("storage/".$video->getRawOriginal('image'));
            $image = request('image')->store('uploads');
            $video->image = $image;
        }

        $video->link = request('link');
        $video->save();
        session()->flash('activeness', 'videos');
        return redirect()->route('videos');
    }


    public function edit(Video $video){
        session()->flash('activeness', 'videos');
        return view('admin.videos.edit',['video'=>$video]);
    }
    public function  destroy(Video $video){
        unlink("storage/".$video->getRawOriginal('image'));
        session()->flash('activeness', 'videos');
        $video->delete();
        return back();
    }
}
