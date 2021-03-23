<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'name' => 'required',
        'birthday' => 'required',
        'gender' => 'required',
       
    );
    
    protected $table = 'profiles';
    
    protected $fillable = [
            'name',
            'birthday',
            ];
}
