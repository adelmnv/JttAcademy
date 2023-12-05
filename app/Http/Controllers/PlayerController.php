<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function players(){
        $players = Player::all();
        return view('players.players_page',compact('players'));
    }
}