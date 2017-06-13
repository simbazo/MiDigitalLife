<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Control extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['control', 'user_created', 'user_updated', 'user_deleted'];
    
    public function questions()
    {
        return $this->belongsTo('App\Models\Shared\Question', 'control_uuid', 'uuid');
    }
    
    public function attributes()
    {
        return $this->belongsToMany('App\Models\Shared\Attribute');
    }
}
