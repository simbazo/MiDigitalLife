<?php

namespace App\Models\Communitychest\Admin;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ccNGO extends BaseModel
{
	protected $primaryKey = 'uuid';
	protected $table = 'cc_ngos';
	protected $dates = ['deleted_at'];

	protected $fillable = ['acronym','name','logo','type_id','short_description','description','contact','email','website','country_id','province','city','address','postal_code','pobox','user_created','user_updated','user_deleted'];

	public function type(){
		return $this->belongsTo(\App\Models\Communitychest\Admin\ccNgoType::class,'type_id');
	}

    public function user(){
    	return $this->belongsTo(\App\Models\Shared\User::class,'user_created');
    }
}
