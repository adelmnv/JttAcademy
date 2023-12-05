<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{
    public function coaches(){
        $coaches = Coach::all();
        return view('coaches.coaches_page',compact('coaches'));
    }

    public function view($coach_id){
        $coach = Coach::findOrFail($coach_id);
        return view('coaches.view',compact('coach'));
    }
}
