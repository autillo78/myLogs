<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SAM extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['date', 'qty'];
    
    protected $dates = ['date'];
}
