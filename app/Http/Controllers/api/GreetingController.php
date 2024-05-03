<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Greeting;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function getAll()
    {
        $greetings = Greeting::getAllGreetings();
        return response(compact('greetings'), 200);
    }

    public function addGreeting(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|min:3|max:255'
        ]);

        try {
            // Create a new Greeting model instance with validated data
            $greeting = Greeting::create($validated_data);

            // If you need to do anything after saving, you can add it here

            // Return a success response
            return response()->json(['message' => 'Greeting added successfully', 'greeting' => $greeting], 201);
        } catch (\Exception $e) {
            // Return an error response if something goes wrong
            return response()->json(['message' => 'Failed to add greeting', 'error' => $e->getMessage()], 500);
        }
    }
}
