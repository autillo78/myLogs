<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = ['date'];
    
    protected $dates = ['date'];


}
