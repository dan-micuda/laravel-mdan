<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StireModel;

class StireController extends Controller
{
    //
    /*public function index()
    {
        $data = StireModel::all(); // Fetch all records
        return view('stire.index', ['data' => $data]);

        //$users = User::all(); // Fetch all users
        //return view('users.index', ['users' => $users]);
    }*/
    public function index(Request $request)
    {
        // Start the query for the 'stiri00' table
        $query = StireModel::query();

        // Add filters based on input
        if ($request->filled('dom_gen')) {
            $query->where('dom_gen', 'like', '%' . $request->dom_gen . '%');
        }

        if ($request->filled('denumire')) {
            $query->where('denumire', 'like', '%' . $request->denumire . '%');
        }

        if ($request->filled('stire')) {
            $query->where('stire', 'like', '%' . $request->stire . '%');
        }

        if ($request->filled('sursa')) {
            $query->where('sursa', 'like', '%' . $request->sursa . '%');
        }

        // Paginate the results (50 rows per page)
        $stiri = $query->paginate(50);

        // Return the view with the search results
        return view('Stire.index', compact('stiri'));
    }

    public function create()
    {
        return view('Stire.create');
    }
    public function edit($id)
    {
        // Find the record by its ID
        $stire = StireModel::findOrFail($id);
    
        // Return the view with the record data for editing
        return view('Stire.edit', compact('stire'));
    }
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'sursa' => 'required|string|max:50',
            'stire' => 'required|string',
        ]);
    
        // Find the record and update it with validated data
        $stire = Stiri::findOrFail($id);
        $stire->sursa = $request->sursa;
        $stire->stire = $request->stire;
        $stire->save(); // Save changes
    
        // Redirect back to the index with a success message
        //return redirect()->route('Stire.index')->with('success', 'Record updated successfully.');
        return redirect()->route('Stire.show', ['id' => $stire->mv_id]);
    }

    public function show($id)
    {
        // Find the record by its ID
        $stire = StireModel::findOrFail($id);
    
        // Return the view with the record data
        return view('Stire.show', compact('stire'));
    }
    public function yourMethod(Request $request)
    {
        return response()->json(['message' => 'Hello from your method!']);
    }
}
