<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\Travel;
use App\Models\Fanta;

class PageController extends Controller
{
    public function index(){

        $trains = Train::all();

        return view('home', compact('trains'));
    }
    public function treno(){
        $travels = Travel::all();
        return view('treno', compact('travels'));
    }
    public function fanta(){
        $team = Fanta::pluck('team');
        $firstTeam = Fanta::select('player', 'player_team', 'position', 'price')->where('team', '=' ,'Marco')->get();

        return view('fanta', compact('team', 'firstTeam'));
    }

}
