<?php namespace App\Midigital\Repositories\Eloquent;

use App\Midigital\Repositories\Contracts\UserInterface;

/**
* @author [Jacinto Joao] <[<jacintotbrc@gmail.com>]>
*/
class UserRepository extends BaseRepository implements UserInterface
{
	
	public function model(){
		return 'App\Models\Shared\User';
	}
}