<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Player;

class PlayerController extends Controller{
    
    public function getAllPlayers(){

        //automatically converts to json
        return Player::all();
    }

    public function getPlayersByFirstName($firstName){
        return response()->json(['players' => Player::where('first_name', $firstName)]);
    }

    public function getPlayersByLastName($lastName){
        return response()->json(['players' => Player::where('last_name', $lastName)]);
    }

    public function getPlayersByFullName($firstName, $lastName){
        $players = Player::where('first_name', $firstName)
                            ->where('last_name', $lastName);
        return response()->json(['players' => $players]);
    }

    public function getPlayerById($id){
        $player = Player::where('id', (int) $id);

        return response()->json(['player' => $player]);
    }
}