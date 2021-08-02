<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'name' => 'required|max:16',
        'mail' => 'required',
        'birthday' => 'required',
        'gender' => 'required|boolean',
        'favorite_team' => 'required|',
       
    );
    
    protected $table = 'profiles';
    
    protected $fillable = [
            'name',
            'birthday',
            ];
}
