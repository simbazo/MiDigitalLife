<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['control', 'user_created', 'user_updated', 'user_deleted'];
    
    public function questions()
    {
        return $this->belongsToMany('App\Models\Shared\Question');
    }
    
    public function attributes()
    {
        return $this->belongsToMany('App\Models\Shared\Attribute');
    }
}
