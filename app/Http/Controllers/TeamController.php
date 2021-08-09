<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Freshbitsweb\Laratables\Laratables;

class TeamController extends Controller
{
    public function showList()
    {
      $teams = Team::all();
        
        return view('user.profile.create', ['teams' => $teams]);
    }
    
   public function index()
    {
      $teams = Team::all();
        
        return view('team.index', ['teams' => $teams]);
    }
}
