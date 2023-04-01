<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Venue::all();
        return view ('venues.index')->with('venues', $venues);
    }

    public function create()
    {
        return view('venues.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Venue::create($input);
        return redirect('venue')->with('flash_message', 'venue Addedd!');
    }

    public function show(string $id)
    {
        $venue = Venue::find($id);
        return view('venues.show')->with('venues', $venue);
    }

    public function edit(string $id)
    {
        $venue = Venue::find($id);
        return view('venues.edit')->with('venues', $venue);
    }

    public function update(Request $request, string $id)
    {
        $venue = Venue::find($id);
        $input = $request->all();
        $venue->update($input);
        return redirect('venue')->with('flash_message', 'venue Updated!');
    }


    public function destroy(string $id)
    {
        venue::destroy($id);
        return redirect('venue')->with('flash_message', 'Venue deleted!');
    }
}
