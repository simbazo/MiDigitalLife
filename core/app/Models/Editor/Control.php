<?php

namespace App\Models\Editor;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Control extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['name', 'type', 'user_created', 'user_updated', 'user_deleted'];
    
    public function questions()
    {
        return $this->belongsTo('App\Models\Editor\Question', 'control_uuid', 'uuid');
    }
    
    public function attributes()
    {
        return $this->belongsToMany('App\Models\Editor\Attribute');
    }
}
