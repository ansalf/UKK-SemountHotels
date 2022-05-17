<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $title = 'Fasilitas';
        $facilities = Facility::all();

        return view('hotel_guest.facilities', compact('title', 'facilities'));
    }

    public function store(Request $request)
    {
        return $request->file('image')->store('uploaded-images');

        $validateData = $request->validate([
            'title' => 'required|max:225',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'body' => 'required'
        ]);
    }
}