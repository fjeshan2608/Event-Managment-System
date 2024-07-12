<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $table = 'datasave';
    public $primaryKey = 'id';
    public $incrementing = 'true';
    public $timestamps = 'false';

    protected $fillable = [
        'name',
        'email ',
        'phone',
        'guest',
        'event',
        'time',
        'date',
        
    ];
}
