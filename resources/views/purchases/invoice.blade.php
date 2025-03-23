@extends('layout')

@section('content')
    <div class="invoice p-5">
        <h1 class="text-center font-bold text-2xl mb-5">فاتورة مشتريات</h1>
        <div class="mb-4">
            <p><strong>المورد:</strong> {{ $purchase->supplier }}</p>
            <p><strong>رقم الهاتف:</strong> {{ $purchase->phone }}</p>
            <p><strong>تأريخ الشراء:</strong> {{ $purchase->purchase_date }}</p>
            <p><strong>الوصف:</strong> {{ $purchase->description }}</p>
        </div>

        <table class="w-full border-collapse border border-gray-400">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-400 p-2">المنتج</th>
                    <th class="border border-gray-400 p-2">الكمية</th>
                    <th class="border border-gray-400 p-2">السعر</th>
                    <th class="border border-gray-400 p-2">الوحدة</th>
                    <th class="border border-gray-400 p-2">القسم</th>
                    <th class="border border-gray-400 p-2">الإجمالي</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchase->items as $item)
                    <tr>
                        <td class="border border-gray-400 p-2">{{ $item->name }}</td>
                        <td class="border border-gray-400 p-2">{{ $item->quantity }}</td>
                        <td class="border border-gray-400 p-2">{{ $item->price }}</td>
                        <td class="border border-gray-400 p-2">{{ $item->unit->name }}</td> 
                        <td class="border border-gray-400 p-2">{{ $item->category->name }}</td> 
                        <td class="border border-gray-400 p-2">{{ $item->total }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="border border-gray-400 p-2 text-right font-bold">الإجمالي الكلي</td>
                    <td class="border border-gray-400 p-2 font-bold">{{ $purchase->items->sum('total') }}</td>
                </tr>
            </tfoot>
        </table>

        <div class="mt-5 text-center">
            <button onclick="window.print()" class="bg-blue-500 text-white px-4 py-2 rounded">طباعة الفاتورة</button>
        </div>
    </div>
@endsection