<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataType extends Model
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['data_type'];
    
}