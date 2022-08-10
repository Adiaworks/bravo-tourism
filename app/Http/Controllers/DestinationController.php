<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function getAllDestinations() {
        $destinations = Destination::get()->toJson(JSON_PRETTY_PRINT);
        return response($destinations, 200);
    }

    public function createDestination(Request $request) {
        $destination = new Destination;
        $destination->name = $request->name;
        $destination->save();
    
        return response()->json([
            "message" => "destination record created"
        ], 201);
    }
}
