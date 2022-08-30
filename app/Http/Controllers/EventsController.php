<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $events = Event::orderBy('event_date', 'DESC')
            ->paginate(6);

        /* var_dump($events); */

        return view('home', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $event = request()->except('_token');

        Event::create($event);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $event = Event::find($id);

        return view('show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $event = Event::find($id);

        return view('edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $event = request()->except('_token', '_method');
        Event::where('id', '=', $id)->update($event);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Event::destroy($id);
       return redirect()->route('home');
    }

    // methods

    public function getPastEvents() {
        $events = Event::orderBy('event_date', 'DESC')
            ->get();

        return view('pastEvents', compact('events'));
    }

    public function inscribe($id)
    {
        $user = User::find(Auth::id());
        $event = Event::find($id);

        $user->event()->attach($event);

        return redirect()->route('home');
    }

    public function cancelInscription($id)
    {
        $user = User::find(Auth::id());
        $event = Event::find($id);
        
        $user->event()->detach($event);
        
        return redirect()->route('home');
        
    }
}


