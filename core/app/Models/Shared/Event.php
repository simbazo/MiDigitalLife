<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['product_uuid', 'user_created', 'user_updated', 'user_deleted'];
    
    public function answer()
    {
        return $this->hasMany('App\Models\Shared\Answer', 'uuid', 'question_uuid');
    }
}