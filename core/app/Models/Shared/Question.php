<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['question', 'data_type_id', 'control_type_id', 'user_created', 'user_updated', 'user_deleted'];
    
    public function datatype()
    {
        return $this->hasOne('App\Models\Shared\DataType', 'uuid', 'data_type_id');
    }
    
    public function controltype()
    {
        return $this->hasOne('App\Models\Shared\ControlType', 'uuid', 'control_type_id');
    }
}