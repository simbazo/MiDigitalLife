<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['short_name', 'long_name'];
    
}
