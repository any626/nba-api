<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\CareerStat;

class CareerStatController extends Controller{
    
    public function getPlayerStats($id){

        return response()->json(['stats' => CareerStat::where('id', (int) $id)]);
    }

    public function getStat($playerId, $statId){
    	$playerStat = CareerStat::where('id', (int) $playerId)
    	                           ->where('stat_type_id', (int) $statId);
        return response()->json(['player_stat' => $playerStat]);
    }
}