<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = [
        'short_name', 
        'long_name', 
        'email',
        'phone',
        'fax',
        'country_id',
        'province',
        'city',
        'address_line1',
        'address_line2',
        'post_code',
        'contact_person_fname',
        'contact_person_lname',
        'contact_person_email',
        'contact_person_cell',
        'user_created', 
        'user_updated', 
        'user_deleted'
    ];
    
    /**
     * The users that belong to the client.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\Shared\User');
    }
    
    /**
     * The projects that belong to the client.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Models\Shared\Project');
    }
}
