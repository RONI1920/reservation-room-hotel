<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $detail = Room::find($id);

        $room = Room::all();

        return view('home.room_details', compact('detail', 'room'));
    }
}
