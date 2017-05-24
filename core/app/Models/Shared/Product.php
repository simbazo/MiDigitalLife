<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['client_id', 'short_name', 'long_name'];
    
}