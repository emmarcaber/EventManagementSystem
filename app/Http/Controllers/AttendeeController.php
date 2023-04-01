<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendees = Attendee::all();
        return view ('attendees.index')->with('attendees', $attendees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();
        Attendee::create($input);
        return redirect('attendee')->with('flash_message', 'Attendee Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $attendee = Attendee::find($id);
        return view('attendees.show')->with('attendees', $attendee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $attendee = Attendee::find($id);
        return view('attendees.edit')->with('attendees', $attendee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attendee = Attendee::find($id);
        $input = $request->all();
        $attendee->update($input);
        return redirect('attendee')->with('flash_message', 'Attendee Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Attendee::destroy($id);
        return redirect('attendee')->with('flash_message', 'Attendee deleted!');
    }
}
