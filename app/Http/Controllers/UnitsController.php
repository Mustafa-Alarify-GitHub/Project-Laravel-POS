<?php

namespace App\Http\Controllers;

use App\Models\units;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $data =units::orderBy("created_at","desc")->get();
     return view("Units/GetAllUnits", ["date"=>$data]);
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
        units::create([
            "name"=>$request->name,
        ]);
        return to_route("units");
    }

    /**
     * Display the specified resource.
     */
    public function show(units $units)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(units $units)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, units $units)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         units::destroy($id);
        return to_route("units");
    }
}
