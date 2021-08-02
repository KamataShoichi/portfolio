<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use Freshbitsweb\Laratables\Laratables;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('schedule.index');
    }
    
    public function getSchedulesTable()
    {
        return Laratables::recordsOf(Schedule::class);
    }
}
