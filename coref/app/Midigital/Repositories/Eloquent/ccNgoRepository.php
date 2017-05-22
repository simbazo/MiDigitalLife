<?php namespace App\Midigital\Repositories\Eloquent;

use App\Midigital\Repositories\Contracts\ccNgoInterface;

/**
* @author [Jacinto Joao] <[<jacintotbrc@gmail.com>]>
*/
class ccNgoRepository extends BaseRepository implements ccNgoInterface
{
	
	public function model(){
		return 'App\Models\Communitychest\Admin\ccNgo';
	}
}