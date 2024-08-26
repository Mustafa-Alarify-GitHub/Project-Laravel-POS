<?php

namespace App\Http\Controllers;

use App\Models\cateogry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CateogryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date = cateogry::get();
        return view("Catogry.GetAllCat", ["date" => $date]);
    }
    public function search(Request $request)
    {
        $date = DB::select(
            "select * from cateogries where name like '%$request->text%' "
        );
        return view("Catogry.GetAllCat", ["date" => $date]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Catogry.AddNewCat");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO Validation
        cateogry::create($request->all());
        session()->flash('status', 'تمت العمليه بنجاح');
        return to_route("cat");
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $date = cateogry::where("id", $id)->first();
        return view("Catogry.UpdateCat", ["date" => $date]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        cateogry::where("id", $id)->update(
            [
                'name' => $request->name,
                'texses' => $request->texses
            ]
        );
        session()->flash('status', 'تمت العمليه بنجاح');
        return to_route("cat");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        cateogry::where("id", $id)->delete();
        session()->flash('status', 'تمت العمليه بنجاح');
        return to_route("cat");
    }
}
