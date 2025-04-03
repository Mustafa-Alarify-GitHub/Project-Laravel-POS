<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div class="invoice p-5">
        <h1 class="text-center font-bold text-2xl mb-5">فاتورة مبيعات</h1>
        <div class="mb-4">
            <p><strong>العميل:</strong> {{ $sale->client->name }}</p>
            <p><strong>طريقة الدفع:</strong> {{ $sale->payment_method }}</p>
            <p><strong>الوصف:</strong> {{ $sale->description }}</p>
        </div>

        <table class="w-full border-collapse border border-gray-400">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-400 p-2">المنتج</th>
                    <th class="border border-gray-400 p-2">الكمية</th>
                    <th class="border border-gray-400 p-2">السعر</th>
                    <th class="border border-gray-400 p-2">الإجمالي</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sale->items as $item)
                    <tr>
                        <td class="border border-gray-400 p-2">{{ $item->item->name }}</td>
                        <td class="border border-gray-400 p-2">{{ $item->quantity }}</td>
                        <td class="border border-gray-400 p-2">{{ $item->price }}</td>
                        <td class="border border-gray-400 p-2">{{ $item->total }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="border border-gray-400 p-2 text-right font-bold">الإجمالي الكلي</td>
                    <td class="border border-gray-400 p-2 font-bold">{{ $sale->items->sum('total') }}</td>
                </tr>
            </tfoot>
        </table>

        <div class="mt-5 text-center">
            <button onclick="window.print()" class="bg-blue-500 text-white px-4 py-2 rounded">طباعة الفاتورة</button>
        </div>
    </div>

</body>
</html>