<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        // Start the query
        $query = Facility::query();

        // Search by name if a search parameter is provided
        if ($request->has('search') && $request->search !== null) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Add more conditions here based on other properties/filters
        // Example: $query->where('property', $request->property);

        // Paginate the result
        $facilities = $query->paginate(10); // 10 can be changed based on your preference

        return view('facilities.index', compact('facilities'));
    }
    public function show($id)
    {
        $facility = Facility::findOrFail($id);
        return view('facilities.show', compact('facility'));
    }
}
