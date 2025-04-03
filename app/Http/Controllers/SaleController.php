<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Sale;
use App\Models\clints;
class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Items::all();
        $clients = clints::all();
        return view('Sales/Sales', ["items" => $items,"clients" => $clients]);
    }


        public function saveSales(Request $request)
    {
        foreach ($request->sales as $saleData) {
            Sale::create([
                'client_id' => $saleData['client_id'],
                'item_id' => $saleData['item_id'],
                'quantity' => $saleData['quantity'],
                'price' => $saleData['price'],
                'total' => $saleData['total'],
                'type' => $saleData['type'],
                'payment_method' => $saleData['payment_method'],
                'description' => $saleData['description'],
            ]);
        }

        return response()->json(['message' => 'Sales data saved successfully!']);
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
    // public function store(Request $request)
    // {
    //     // التحقق من الصحة
    //     $request->validate([
    //         'client_id' => 'required|exists:clients,id',
    //         'payment_method' => 'required|in:كاش,بطاقة',
    //         'description' => 'nullable|string',
    //         'items' => 'required|json',
    //     ]);

    //     try {
    //         // فك تشفير العناصر من JSON
    //         $items = json_decode($request->items, true);

    //         // إنشاء الفاتورة
    //         $sale = Sale::create([
    //             'client_id' => $request->client_id,
    //             'payment_method' => $request->payment_method,
    //             'description' => $request->description,
    //         ]);

    //         // إضافة العناصر إلى الفاتورة
    //         foreach ($items as $item) {
    //             $sale->items()->create([
    //                 'item_id' => Items::where('name', $item['name'])->first()->id,
    //                 'quantity' => $item['quantity'],
    //                 'price' => $item['price'],
    //                 'total' => $item['total'],
    //             ]);
    //         }

    //         // إرجاع استجابة ناجحة
    //         return response()->json(['success' => true, 'message' => 'تم حفظ الفاتورة بنجاح']);
    //     } catch (\Exception $e) {
    //         // إرجاع استجابة فاشلة مع رسالة الخطأ
    //         return response()->json(['success' => false, 'message' => 'حدث خطأ أثناء حفظ الفاتورة: ' . $e->getMessage()], 500);
    //     }
    // }

        public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'payment_method' => 'required|in:كاش,بطاقة',
            'description' => 'nullable|string',
            'items' => 'required|json',
        ]);

        try {
            $items = json_decode($request->items, true);

            $sale = Sale::create([
                'client_id' => $request->client_id,
                'payment_method' => $request->payment_method,
                'description' => $request->description,
            ]);

            foreach ($items as $item) {
                $itemModel = Items::where('name', $item['name'])->first();

                if ($itemModel) {
                    $sale->items()->create([
                        'item_id' => $itemModel->id,
                        'quantity' => $item['quantity'],
                        'price' => $item['price'],
                        'total' => $item['total'],
                    ]);
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'تم حفظ الفاتورة بنجاح',
                'sale_id' => $sale->id,
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
        $sale = Sale::with(['client', 'items.item'])->findOrFail($id);
        return view('sales.invoice', compact('sale'));
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
