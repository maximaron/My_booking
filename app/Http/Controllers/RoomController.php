<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::all();
        return view('rooms.index', ["rooms" => $rooms]);
    }
    public function create(){
        return view('rooms.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'class' => 'required',
            'number' => 'required',
            'price' => 'required',
        ]);
        $newRoom = Room::create($data);

        return redirect()->route('room');
    }

    public function deleteRoom($id){
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('room');
    }
}
