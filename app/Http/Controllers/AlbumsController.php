<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Repositories\AlbumRepository;

class AlbumsController extends Controller
{

    public function __construct(AlbumRepository $repository)
    {
        $this->repository = $repository;
    }

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

        $this->repository->saveAlbum($request);
        return \Redirect::route('albums.index');

    }

    public function show($id){
        $album = Album::find($id);
        return view('admin.albums.view')->with('album', $album);
    }

    
    public function addImageToAllUserAlbums() {
        dd('running');
    }
}
