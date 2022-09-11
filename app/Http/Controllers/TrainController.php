<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    //
    public function index(){

        $trains = train::all();

        return view('home.train', compact('trains'));

    }
}
