<?php 
namespace App\Repositories;
use App\Album;
use App\Repositories\AlbumRepository;

class AlbumRepository {

    // 
	public function saveAlbum($request) {
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
	}

	public function createSharedByAdminAlbum($user) {

    	$albums = new Album;
        $albums->name = 'Shared By Admin';
        $albums->description = 'Photos shared by admin are stored in this Folder';
        $albums->user_id = $user->id;
        $albums->cover_image = 'admin_thumb.jpg';
        $albums->save();
	}

}