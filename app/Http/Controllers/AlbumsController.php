<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
     public function index(){
        $user_id = \Auth::user()->id;
        $albums = Album::with('photos')->where('user_id', $user_id)
                                        ->get();
    	return view('admin.albums.index')->with('albums', $albums);
    }

    public function create(){
    	return view('admin.albums.create');
    }

    public function store(Request $request) {
    	$this->validate($request,[
    		'name' => 'required',
    		'cover_image' => 'image|max:1999'
    	]);

    	$fileNameWithExt =  $request->file('cover_image')->getClientOriginalName();
    	$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    	$extension = $request->file('cover_image')->getClientOriginalExtension();
    	$fileNameToStore = $fileName.'_'.time().'.'.$extension;
    	$path = $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);

    	$albums = new Album;
        $albums->name = $request->input('name');
        $albums->description = $request->input('description');
        $albums->user_id = \Auth::user()->id;
        $albums->cover_image = $fileNameToStore;

        $albums->save();

        return \Redirect::route('albums.index');
    }

    public function show($id){
        $album = Album::find($id);
        return view('admin.albums.view')->with('album', $album);
    }
}