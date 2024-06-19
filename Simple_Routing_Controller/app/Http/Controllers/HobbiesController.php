<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function myHobbies (){

        return view('hobbies')
                ->with('sing' , 'Singing')
                ->with('instruments' , 'Playing Violin, Ukulele, and Kalimba')
                ->with('games' , 'Call of Duty Mobile, and Mobile Legends')
                ->with('movies' , 'K-drama, Comedy, Horror, RomCom, Romance, C-drama')
                ->with('sports', 'Badminton, and Volleyball')
                ->with('kpopidol', 'Enhypen, BlackPink, Seventeen, BTS, Twice')
                ->with('kpopthing', 'Collecting photocards and albums, Attending Concerts and Fanmeets');
    }
}