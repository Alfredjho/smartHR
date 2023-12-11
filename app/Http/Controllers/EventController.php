<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('schedule', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        
        $data = $request->validate([
            'day' => 'required|integer',
            'month' => 'required|integer',
            'year' => 'required|integer',
            'title' => 'required|string',
            'time' => 'required|string',
        ]);

        $event = new Event([
            'user_id' => $user->id,
            'day' => $data['day'],
            'month' => $data['month'],
            'year' => $data['year'],
            'title' => $data['title'],
            'time' => $data['time'],
        ]);

        $event->save();

        return redirect()->back()->with('success', 'Event added successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // Assuming you have authenticated users, get the authenticated user
        $user = auth()->user();

        // Fetch all events for the authenticated user
        $events = Event::where('user_id', $user->id)->get();

        if ($events->isEmpty()) {
            return response()->json(['events' => []]);
        }

        // Structure the response with events grouped by date
        $formattedEvents = [];

        foreach ($events as $event) {
            $dateKey = "{$event->year}-{$event->month}-{$event->day}";

            if (!isset($formattedEvents[$dateKey])) {
                $formattedEvents[$dateKey] = [
                    'day' => $event->day,
                    'month' => $event->month,
                    'year' => $event->year,
                    'events' => [],
                ];
            }

            $formattedEvents[$dateKey]['events'][] = [
                'title' => $event->title,
                'time' => $event->time,
            ];
        }
        // Convert the associative array to a simple array
        $formattedEvents = array_values($formattedEvents);

        // You can now return the formatted events or perform any other logic
        return response()->json(['events' => $formattedEvents]);
    }

    public function delete(Request $request)
    {
        $user = auth()->user();

        $requestData = $request->json()->all();
    
        $event = Event::where('user_id', $user->id)
            ->where('day', $requestData["day"])
            ->where('month', $requestData["month"])
            ->where('year', $requestData["year"])
            ->where('title', $requestData["title"])
            ->first();
    
        if ($event) {
            $event->delete();
            return response()->json(['message' => 'Event deleted successfully']);
        } else {
            return response()->json(['error' => 'Event not found'], 404);
        }
    }
}
