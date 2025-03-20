@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8" dir="rtl">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">عرض المنتجات</h2>
    
    <div class="overflow-x-auto">
        <table class="w-full border-collapse bg-white shadow-lg rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">الاسم</th>
                    <th class="py-3 px-6 text-left">الكمية</th>
                     <th class="py-3 px-6 text-left">الوحدة</th>
                    <th class="py-3 px-6 text-left">سعر الجملة</th>
                    <th class="py-3 px-6 text-left">سعر البيع</th>
                    <th class="py-3 px-6 text-left">العرض</th>
                    <th class="py-3 px-6 text-left">الوصف</th>
                    <th class="py-3 px-6 text-left">الباركود</th>
                    <th class="py-3 px-6 text-left">الصورة</th>
                    <th class="py-3 px-6 text-left">تاريخ الإنشاء</th>
                    <th class="py-3 px-6 text-left">العمليات</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
                @foreach($products as $product)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $product->id }}</td>
                        <td class="py-3 px-6">{{ $product->name }}</td>
                        <td class="py-3 px-6">{{ $product->mount }}</td>
                        <td class="py-3 px-6">{{ $product->unit }}</td>
                        <td class="py-3 px-6">{{ $product->wholesale_price }}</td>
                        <td class="py-3 px-6">{{ $product->sales_price }}</td>
                        <td class="py-3 px-6">
                            <span class="px-2 py-1 text-xs font-semibold {{ $product->isDisplay ? 'text-green-600 bg-green-100' : 'text-red-600 bg-red-100' }} rounded">
                                {{ $product->isDisplay ? 'نعم' : 'لا' }}
                            </span>
                        </td>
                        <td class="py-3 px-6 truncate max-w-xs">{{ $product->description }}</td>
                        <td class="py-3 px-6">{{ $product->barcode }}</td>
                        <td class="py-3 px-6">
                            <img src="{{ asset($product->img) }}" alt="{{ $product->name }}" class="w-20 object-contain h-20 rounded-lg">
                        </td>
                        <td class="py-3 text-nowrap px-6">{{ \Carbon\Carbon::parse($product->created_at)->translatedFormat('d F Y') }}</td>

                        <td class="py-3 px-6">
                            <div class="flex justify-center items-center">
                                <a href="{{ route('item.edit', $product->id) }}" class="mr-2">
                                    <img src="{{ asset('img/edit.png') }}" width="22px" class="m-auto hover:scale-110 transition" alt="">
                                </a>
                                <form action="{{ route('item.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <img src="{{ asset('img/delete.png') }}" width="22px" class="m-auto hover:scale-110 transition" alt="">
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
