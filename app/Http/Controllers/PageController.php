<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\Travel;

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

}
