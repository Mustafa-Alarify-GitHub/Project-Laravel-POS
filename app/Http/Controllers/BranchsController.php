<?php

namespace App\Http\Controllers;

use App\Models\Branchs;
use App\Models\User;
use Illuminate\Http\Request;

class BranchsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branchs::all();

        return view('Branches.index', ["branches" => $branches] );
    }

    public function create()
    {
            $managers = User::all(); 
        return view('Branches.AddNewBranche', compact('managers'));
    }

    public function store(Request $request)
    {

        Branchs::create($request->all());
        return redirect()->route('branches.index')->with('success', 'Branch added successfully.');
    }

    public function edit($id)
    {
        $branch = Branchs::findOrFail($id);
        return response()->json($branch); // Return the branch data as JSON for inline editing
    }

public function update(Request $request, $id)
{


    $branch = Branchs::findOrFail($id);
    $branch->update($request->all());

    return response()->json(['success' => true, 'message' => 'Branch updated successfully.']);
}

    public function destroy($id)
    {
        $branch = Branchs::findOrFail($id);
        $branch->delete();
        return redirect()->route('branches.index')->with('success', 'Branch deleted successfully.');
    }
}
