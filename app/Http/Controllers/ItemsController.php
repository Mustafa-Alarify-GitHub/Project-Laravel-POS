<?php

namespace App\Http\Controllers;

use App\Models\cateogry;
use App\Models\Items;
use App\Models\units;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data=Items::all();
        return view('Items/Show_all_items', ["products" => $data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = cateogry::get();
        $units = units::get();

        return view('Items/Add_New_Items', ["cat" => $cat, "units" => $units]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img_path = $request->file('img')->store('', 'Images');
        Items::create([
            "name" => $request->name,
            "mount" => $request->mount,
            "cat" => $request->cat,
            "unit" => $request->unit,
            "wholesale_price" => $request->wholesale_price,
            "sales_price" => $request->sales_price,
            "limit_Short" => $request->limit_Short,
            "overTime" => $request->overTime,
            "isDisplay" => $request->isDisplay,
            "description" => $request->description,
            "barcode" => $request->barcode,
            "img" =>  '/img_Items' . '/' . $img_path,
        ]);
        session()->flash('status', 'تمت العمليه بنجاح');
        return to_route("Add_Items");
    }

    /**
     * Display the specified resource.
     */
    public function show(Items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Items::findOrFail($id);
        $cat = cateogry::all();
        $units = units::all();
        return view('Items/UpdateItem', compact('item', 'cat', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $item = Items::findOrFail($id);
        $item->update([
            'name' => $request->name,
            'mount' => $request->mount,
            'cat' => $request->cat,
            'unit' => $request->unit,
            'wholesale_price' => $request->wholesale_price,
            'sales_price' => $request->sales_price,
            'limit_Short' => $request->limit_Short,
            'overTime' => $request->overTime,
            'isDisplay' => $request->isDisplay,
            'description' => $request->description,
            'barcode' => $request->barcode,
        ]);

        if ($request->hasFile('img')) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $item->img = $imageName;
            $item->save();
        }
        session()->flash('status', 'تم تعديل الصنف بنجاح!');
        return to_route("get_Items");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Items::where("id", $id)->delete();
        session()->flash('status', 'تمت العمليه بنجاح');
        return to_route("get_Items");
    }
}
