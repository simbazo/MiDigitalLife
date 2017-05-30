<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['short_name', 'long_name', 'user_created', 'user_updated', 'user_deleted'];
    
    /**
     * The products that belong to the client.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Shared\Product');
    }
}
