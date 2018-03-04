<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
     public function index(){

        $albums = Album::with('photos')->get();
    	return view('albums.index')->with('albums', $albums);
    }

    public function create(){
    	return view('albums.create');
    }

    public function store(Request $request) {
    	// return 'jghhjhghjghjgjh ';
    	$this->validate($request,[
    		'name' => 'required',
    		'cover_image' => 'image|max:1999'
    	]);

    	$fileNameWithExt =  $request->file('cover_image')->getClientOriginalName();

    	$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

    	$extension = $request->file('cover_image')->getClientOriginalExtension();

    	$fileNameToStore = $fileName.'_'.time().'.'.$extension;

    	$path = $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);

    	// return $path;
    	$albums = new Album;

        $albums->name = $request->input('name');
        $albums->description = $request->input('description');
        $albums->cover_image = $fileNameToStore;

        // return $path;
        $albums->save();

        return redirect('/albums')->with('Success', 'Album Created');
    	
    }

    public function show($id){
        $album = Album::find($id);
        return view('albums.photo')->with('album', $album);
    }
}
