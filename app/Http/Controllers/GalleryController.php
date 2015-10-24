<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{

    public function __construct(){

        $this->middleware('auth');


    }
    public function viewGalleryList()
    {

        $gallery = Gallery::all();

        return view('gallery.gallery',compact('gallery'));
    }

    public function saveGallery(Request $request)
    {

        //Validation
        $validator = Validator::make($request->all(), [
            'gallery_name' => 'required|min:5|max:255',

        ]);


        if ($validator->fails()) {
            return redirect('gallery/list')
                ->withErrors($validator)
                ->withInput();
        }

        $gallery = new Gallery();

        //Saving Gallery File
        $gallery->name = $request->input('gallery_name');
        $gallery->created_by = Auth::user()->id;
        $gallery->published = 1;
        $gallery->save();

        return redirect()->back();

    }

    public function viewGalleryPics($id)
    {
        $gallery = Gallery::findorfail($id);
        return view('gallery.gallery-view',compact('gallery'));
        
    }

    public function doImageUpload(Request $request)
    {
        //get the file from the post request
        $file = $request->file('file');


        //set the standard file name
        $filename = uniqid() . $file->getClientOriginalName();

        //move the file into the location
        $file->move('gallery/images',$filename);


        //save the image details into database
        $gallery = Gallery::find($request->input('gallery_id'));

        $image = $gallery->images()->create([
            'gallery_id' => $request->input('gallery_id'),
            'file_name' => $filename ,
            'file_size' => $file->getClientSize(),
            'file_mime' => $file->getClientMimeType() ,
            'file_path'=> 'gallery/images/' . $filename,
            'created_by' => Auth::User()->id,

        ]);

        return $image;


    }
}


