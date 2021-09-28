<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::all();
        session()->flash('activeness', 'reviews');

        return view('admin.reviews.index',['reviews'=>$reviews]);
    }
    public function create(){
        session()->flash('activeness', 'reviews');
        return view('admin.reviews.create');
    }
    public function store(){
        $review = new Review();
        $review->author = request('author');
        $review->star = request('star');
        $review->text = request('text');
        $review->author_uz = request('author_uz');
        $review->text_uz = request('text_uz');
        if(request('image')){
            $image = request('image')->store('uploads');
            $review->image = $image;
        }else{
            return back();
        }
        $review->save();

        session()->flash('activeness', 'reviews');
        return redirect()->route('reviews');
    }
    public function update(Review $review){

        $inputs = request()->validate([
            'author'=>'required',
            'author_uz'=>'required',
            'text'=>'required',
            'text_uz'=>'required',
            'star'=>'required',
        ]);


        $review->author = request('author');
        $review->star = request('star');
        $review->text = request('text');
        $review->author_uz = request('author_uz');
        $review->text = request('text');
        if(request('image')){
            unlink("storage/".$review->getRawOriginal('image'));
            $image = request('image')->store('uploads');
            $review->image = $image;
        }
        $review->save();

        session()->flash('activeness', 'reviews');
        return redirect()->route('reviews');
    }
    public function edit(Review $review){
        session()->flash('activeness', 'reviews');
        return view('admin.reviews.edit',['review'=>$review]);
    }

    public function destroy(Review $review){
        $review->delete();
        unlink("storage/".$review->getRawOriginal('image'));

        session()->flash('activeness', 'reviews');
        return back();
    }



}
