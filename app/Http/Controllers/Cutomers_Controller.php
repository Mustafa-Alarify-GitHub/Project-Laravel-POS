<?php

namespace App\Http\Controllers;
use App\Models\clints;

use Illuminate\Http\Request;

class Cutomers_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=clints::get();
        return view('Custmers.Custmer', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        clints::create([
            "name"=>$request->name,
            "email"=>$request->email ,
            "phone"=>$request->phone ,
        ]);
        return to_route("add.Custmer");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=clints::where("id",$id)->first();
        return view('Custmers.Custmer', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd($id);
        clints::where("id",$id)->update([
            "name"=>$request->name,
            "email"=>$request->email ,
            "phone"=>$request->phone ,
        ]);
        return to_route("Custmer");    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        clints::destroy($id);
        return to_route("add.Custmer");


    }
}
