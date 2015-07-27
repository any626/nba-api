<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ConferenceTeam;

class ConferenceTeamController extends Controller{
    
    public function getTeamsByConference($id){

        //automatically converts to json
        return response()->json(['teams' => ConferenceTeam::where('id', (int) $id)]);
    }
}