<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;


class sliderController extends Controller
{
    function slideshow(){
        $sliders = Slider::all();
        return view('backend.pages.showSlide',['slides'=>$sliders]);
    }

    function slidecreate(){
        return view('backend.pages.createSlide');
    }

    function slidestore(Request $req){
        $slider = new Slider;
        $slider->title = $req->title;
        $slider->link = $req->link;
        $file = $req->file('image');
        $path = "upload/slide/";
        $orgName = $file->getClientOriginalName();
        $file->move($path,$orgName);
        $slider->image = $path.$orgName;
        $slider->save();
        return redirect()->route('slide.show');
    }

    function slidedestory($id){
       $slider = Slider::find($id);
       unlink($slider->image);
       $slider->delete();
       return redirect()->route('slide.show');
    }

    function slidededit($id){
        $slider = Slider::find($id);
        return view('backend.pages.editslide',['slider'=>$slider]);
    }
    function slideupdate(Request $req,$id){
        $slide = Slider::find($id);
        if($req->has('image')){
            $file = $req->file('image');
            $path = "upload/slide/";
            $orgName = $file->getClientOriginalName();
            $file->move($path,$orgName);
            $url=$path.$orgName;
            unlink($slide->image);

        }
        else{
            $url = $slide->image;
        }
        $slide->id = $req->id;
        $slide->title = $req->title;
        $slide->link = $req->link;
        $slide->image = $url;
        $slide->save();
        return redirect()->route('slide.show');
    }

}
