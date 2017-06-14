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
    
    public function answers()
    {
        return $this->hasMany('App\Models\Shared\Answer', 'event_uuid', 'uuid');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Models\Shared\Product', 'uuid', 'product_uuid');
    }
}