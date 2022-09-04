<?php

namespace App\Http\Controllers;

use App\Models\Meetup;
use App\Models\User;
use App\Http\Requests\StoreMeetupRequest;
use App\Http\Requests\UpdateMeetupRequest;
use Illuminate\Http\Request;

class MeetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user()->meetups();
        // return views('')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            $meetup = new Meetup();
            $meetup->user_id = $request->user_id ;
            $meetup->notes = $request->notes;
            $meetup->guests_name = $request->name;
            $meetup->guests_email = $request->email;
            $meetup->from = $request->from;
            $meetup->duration = $request->duration;
            $meetup->save();
            return redirect("/")->with('success', 'Meetup Scheduled Successfully.');   
    }
    
    public function getUser(Request $request)
    {
        $user = User::where("id",$request->userId)->first();
        return view('schedule', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMeetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function show(Meetup $meetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function edit(Meetup $meetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeetupRequest  $request
     * @param  \App\Models\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeetupRequest $request, Meetup $meetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meetup $meetup)
    {
        //
    }
}