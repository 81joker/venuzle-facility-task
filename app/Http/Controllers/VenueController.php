<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index(Request $request)
    {
        // Start the query
        $query = Venue::query();

        // Search by name if provided
        if ($request->has('search') && $request->search !== null) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Example filter implementation (adjust according to actual filters)
        // if ($request->has('property') && $request->property !== null) {
        //     $query->where('property', $request->property);
        // }

        // Paginate the result
        $venues = $query->paginate(10);

        return view('venues.index', compact('venues'));
    }

    public function show($id)
    {
        $venue = Venue::findOrFail($id);
        return view('venues.show', compact('venue'));
    }
}
