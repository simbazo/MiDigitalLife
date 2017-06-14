<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['event_uuid', 'question_uuid', 'answer', 'user_created', 'user_updated', 'user_deleted'];
    
    public function event()
    {
        return $this->belongsTo('App\Models\Shared\Event', 'event_uuid', 'uuid');
    }
    
    public function question()
    {
        return $this->belongsTo('App\Models\Shared\Question', 'question_uuid', 'uuid');
    }
}