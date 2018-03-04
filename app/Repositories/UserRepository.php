<?php 

namespace App\Repositories;
use App\Models\User;

class UserRepository
{
	/**
	 * [userCreate description]
	 * @param  [type] $data [accept array ]
	 * @return [type]       [array]
	 */
	public function userCreate($data)
	{
		// dd($data);
		$image = $data['image'];
		$fullname = null;
		if($image) {

			$extension = $image->getClientOriginalExtension();
			$time = time();			
			$fullname = $time.str_random(4).'.'.$extension;
			$path = public_path().'/uploads/profile/';
			$move = $image->move($path, $fullname);		 		
		}

		$user = [
			'first_name' => $data['first_name'],
			'last_name' => $data['last_name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'image' => $fullname,
		];

		$userData = User::create($user);

		return $userData;
	}

	/**
	 * [update description]
	 * @param  [type] $data [request array]
	 * @return [type]       [array]
	 */
	public function update($request, $id)
	{
		$image = $request->file('image');
		$fullname = null;
		if($image) {

			$extension = $image->getClientOriginalExtension();
			$time = time();			
			$fullname = $time.str_random(4).'.'.$extension;
			$path = public_path().'/uploads/profile/';
			$move = $image->move($path, $fullname);		 		
		}

		$user = User::findOrfail($id);

		$user->first_name = $request->get('first_name');
		$user->last_name = $request->get('last_name');
		$user->email = $request->get('email');
		$user->password = bcrypt($request->get('password'));
		$user->image = $fullname;

		if(!$user->save()){
			throw new Exception("user not update", 401);
		}

		return $user;
	}

	public function delete($id)
	{
		$user = User::findOrfail($id);

		return $user;
	}
}