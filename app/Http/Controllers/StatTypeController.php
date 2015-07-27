<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\StatType;

class StatTypeController extends Controller{
    
    public function getStatTypes(){

        return StatType::all();
    }
}