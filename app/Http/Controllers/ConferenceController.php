<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Conference;

class ConferenceController extends Controller{
    
    public function getAllConferences(){

        //automatically converts to json
        return Conference::all();
    }
}