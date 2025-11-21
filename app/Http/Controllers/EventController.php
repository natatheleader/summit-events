<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function show($slug)
    {
        $event = Event::where('slug', $slug)
            ->where('is_active', true)
            ->with(['speakers', 'topics', 'industries', 'sponsors'])
            ->firstOrFail();

        return view('events.show', compact('event'));
    }

    public function register(Request $request, $slug)
    {
        $event = Event::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'registration_type' => 'required|in:delegate,sponsor,speaker,exhibitor',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $registration = Registration::create([
            'event_id' => $event->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'job_title' => $request->job_title,
            'registration_type' => $request->registration_type,
            'message' => $request->message,
            'status' => 'pending',
        ]);

        // You can add email notification here later
        // Mail::to($registration->email)->send(new RegistrationConfirmation($registration));

        return response()->json([
            'success' => true,
            'message' => 'Registration submitted successfully! We will contact you soon.',
            'registration' => $registration
        ]);
    }
}