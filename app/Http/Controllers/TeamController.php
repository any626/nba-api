<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Team;

class TeamController extends Controller{
    
    public function getAllTeams(){

        //automatically converts to json
        return Team::all();
    }

    public function getTeamById($id){
        return response()->json(['team' => Team::where('id', (int) $id)]);
    }
}