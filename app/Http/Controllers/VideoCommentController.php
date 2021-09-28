<?php

namespace App\Http\Controllers;

use App\VideoComment;
use Illuminate\Http\Request;

class VideoCommentController extends Controller
{
    public function index(){
        session()->flash('activeness', 'video_comments');
        $videos = VideoComment::orderBy('created_at', 'desc')->paginate(\request('size'));
        return view('admin.videoComments.index', ['videos'=> $videos]);
    }

    public function create(){
        session()->flash('activeness', 'video_comments');
        return view('admin.videoComments.create');
    }
    public function store(){
        $video_comment = new VideoComment();
        if(request('image')){
            $image = request('image')->store('uploads');
            $video_comment->image = $image;
        }else{
            return back();
        }
        $video_comment->link = request('link');
        $video_comment->save();
        session()->flash('activeness', 'video_comments');
        return redirect()->route('video_comments');
    }


    public function update(VideoComment $videoComment){
        if(request('image')){
            unlink("storage/".$videoComment->getRawOriginal('image'));

            $image = request('image')->store('uploads');
            $videoComment->image = $image;

        }
        $videoComment->link = request('link');
        $videoComment->save();
        session()->flash('activeness', 'video_comments');
        return redirect()->route('video_comments');
    }


    public function edit(VideoComment $videoComment){
        session()->flash('activeness', 'video_comments');
        return view('admin.videoComments.edit',['video'=>$videoComment]);
    }
    public function  destroy(VideoComment $videoComment){
        unlink("storage/".$videoComment->getRawOriginal('image'));
        session()->flash('activeness', 'video_comments');
        $videoComment->delete();
        return back();
    }

}
