@extends('layout')
@section('content')
    <div class="w-[95%] mt-10 bg-white Myshadow">
        
        <form action="{{ route('item.update', $item->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <table class="w-full">
                <thead>
                    <tr class="w-full flex justify-center items-center text-xl py-2">
                        <td>تعديل الصنف</td>
                    </tr>
                    {{-- رسالة حالة التحديث --}}
                    @if (session('status'))
                        <div class="my-1 transition" id="alert">
                            <h1 class="w-full flex justify-center items-center text-bold bg-green-400 py-3">
                                {{ session('status') }}
                            </h1>
                        </div>
                        <script>
                            const alert = document.getElementById("alert");
                            alert.style.opacity = "block";
                            setTimeout(function() {
                                alert.style.opacity = "0";
                                setTimeout(function() {
                                    alert.style.display = "none";
                                }, [150])
                            }, [2000])
                        </script>
                    @endif

                    {{-- إدخال الاسم التجاري --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <input name="name" type="text" class="w-[70%]" value="{{ old('name', $item->name) }}">
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الاسم التجاري</td>
                    </tr>

                    {{-- إدخال الكمية --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <input name="mount" type="text" class="w-[70%] border border-gray-400" value="{{ old('mount', $item->mount) }}">
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الكمية</td>
                    </tr>

                    {{-- إدخال القسم --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <select name="cat" class="w-[70%] text-center border border-gray-400">
                                @foreach ($cat as $category)
                                    <option value="{{ $category->id }}" 
                                        {{ old('cat', $item->cat) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: القسم</td>
                    </tr>

                    {{-- إدخال الوحدة --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <select name="unit" class="w-[70%] text-center border border-gray-400">
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}" 
                                        {{ old('unit', $item->unit) == $unit->id ? 'selected' : '' }}>
                                        {{ $unit->name }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الوحدة</td>
                    </tr>

                    {{-- إدخال السعر الجملة --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <input name="wholesale_price" type="number" class="w-[70%] border border-gray-400" value="{{ old('wholesale_price', $item->wholesale_price) }}">
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: سعر الجملة</td>
                    </tr>

                    {{-- إدخال سعر البيع --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <input name="sales_price" type="number" class="w-[70%] border border-gray-400" value="{{ old('sales_price', $item->sales_price) }}">
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: سعر البيع</td>
                    </tr>

                    {{-- إدخال حد النواقص --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <input type="number" name="limit_Short" class="w-[70%] border border-gray-400" value="{{ old('limit_Short', $item->limit_Short) }}">
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: حد النواقص</td>
                    </tr>

                    {{-- إدخال تاريخ الصلاحية --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <input type="date" name="overTime" class="w-[70%] text-center" value="{{ old('overTime', $item->overTime) }}">
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: تاريخ الصلاحية</td>
                    </tr>

                    {{-- إدخال خيار الظهور اون لاين --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <select name="isDisplay" class="w-[70%] text-center border border-gray-400">
                                <option value="1" {{ old('isDisplay', $item->isDisplay) == 1 ? 'selected' : '' }}>نعم</option>
                                <option value="0" {{ old('isDisplay', $item->isDisplay) == 0 ? 'selected' : '' }}>لا</option>
                            </select>
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: ظهور اون لاين</td>
                    </tr>

                    {{-- إدخال الموصفات --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <textarea class="w-[70%] border border-gray-400 text-center border" name="description" id="" cols="30" rows="5">{{ old('description', $item->description) }}</textarea>
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الموصفات</td>
                    </tr>

                    {{-- إدخال الباركود --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <input name="barcode" type="number" class="w-[70%] border border-gray-400" value="{{ old('barcode', $item->barcode) }}">
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الباركود</td>
                    </tr>

                    {{-- إدخال الصورة --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <input name="img" type="file" class="w-[70%] border border-gray-400">
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: إضافة صورة</td>
                    </tr>

                    {{-- زر الحفظ --}}
                    <tr>
                        <td colspan="2" class="bg-white flex justify-center my-2">
                            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">حفظ التعديل</button>
                        </td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
@endsection
