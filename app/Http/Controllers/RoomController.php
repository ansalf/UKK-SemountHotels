<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $title = 'Kamar';
        $rooms = Room::all();
    
        return view('hotel_guest.rooms', compact('title', 'rooms'));
    }

    public function store(Request $request){
        return$request->file('image')->store('uploaded-images');

        $validateData = $request->validate([
            'title' => 'required|max:225',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'body' => 'required'  
        ]);
    }
}