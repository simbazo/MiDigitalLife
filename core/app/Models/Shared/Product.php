<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['short_name', 'long_name', 'lock', 'user_created', 'user_updated', 'user_deleted'];
    
    public function clients()
    {
        return $this->belongsToMany('App\Models\Shared\Client');
    }
    
    public function projects()
    {
        return $this->belongsToMany('App\Models\Shared\Project');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Models\Shared\Question');
    }   
}