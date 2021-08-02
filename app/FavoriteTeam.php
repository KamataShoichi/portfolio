<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteTeam extends Model
{
    protected $table = 'favorite_teams';
    //protected $guarded = array('id');
    //public $timestamps = true;
    protected $fillable = [
        'name',
        ];
}
