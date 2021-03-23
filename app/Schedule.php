<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    
    protected $guarded = array('id');
    
    public $timestamps = true;
    
    protected $fillable = [
        'date', 'comptitive_team', 'place'];
}
