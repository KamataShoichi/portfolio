<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FavoriteTeam;

class FavoriteTeamController extends Controller
{
    public function showList()
    {
      $favorite_teams = FavoriteTeam::all();
      
      //dd($favorite_teams);
        
        return view('user.profile.create', ['favorite_teams' => $favorite_teams]);
    }
}
