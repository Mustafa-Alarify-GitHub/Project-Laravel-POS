<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;
use App\Models\cateogry;
use App\Models\units;
class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units=units::all();
        $cat = cateogry::all();
        return view('purchases/purchases', ["units" => $units,"cat" => $cat]);
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
    $request->validate([
        'supplier' => 'required|string',
        'phone' => 'required|string',
        'purchase_date' => 'required|date',
        'description' => 'nullable|string',
        'items' => 'required|json',
    ]);

    try {
        $items = json_decode($request->items, true);

        $purchase = Purchases::create([
            'supplier' => $request->supplier,
            'phone' => $request->phone,
            'purchase_date' => $request->purchase_date,
            'description' => $request->description,
        ]);

        foreach ($items as $item) {
            if (empty($item['unit_id']) || empty($item['category_id'])) {
                throw new \Exception('يرجى اختيار الوحدة والقسم');
            }

            $purchase->items()->create([
                'name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total' => $item['total'],
                'unit_id' => $item['unit_id'], 
                'category_id' => $item['category_id'], 
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'تم حفظ الفاتورة بنجاح',
            'purchase_id' => $purchase->id,
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'حدث خطأ أثناء حفظ الفاتورة: ' . $e->getMessage(),
        ], 500);
    }
}

    public function showInvoice($id)
    {
            $purchase = Purchases::with(['items.unit', 'items.category'])->findOrFail($id);
    return view('purchases.invoice', compact('purchase'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
