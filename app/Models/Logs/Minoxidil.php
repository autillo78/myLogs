<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minoxidil extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['date', 'volume'];
    
    protected $dates = ['date'];
}
