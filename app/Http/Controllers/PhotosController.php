<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id) {
    	return view('admin.photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request) {
    	// dd($request->input('album_id'));
    	$this->validate($request,[
    		'title' => 'required',
    		'photo' => 'image|max:1999'
    	]);

    	$fileNameWithExt =  $request->file('photo')->getClientOriginalName();

    	$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

    	$extension = $request->file('photo')->getClientOriginalExtension();

    	$fileNameToStore = $fileName.'_'.time().'.'.$extension;

    	$path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $fileNameToStore);

    	$photo = new Photo;
    	$photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $fileNameToStore;
        $photo->save();

        return redirect('/albums/show/'.$request->input('album_id'))->with('Success', 'Photo uploaded');
    }

    public function show($id) {
        $photo = Photo::find($id);
        return view('admin.photos.show')->with('photo', $photo); 
    }

    public function destroy($id) {
        $photo = Photo::find($id);

        if (Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)) {
            # code...
            $photo->delete();
            return redirect('/albums/show/'.$photo->album_id)->with('Success', 'Photo deleted');
        }
    }
}
