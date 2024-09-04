@extends('layout')
@section('content')
    <div class="w-[95%] mt-10 bg-white Myshadow">
        <form action="{{ route('item.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <table class="w-full">
                <thead>
                    <tr class="w-full flex justify-center items-center text-xl py-2">
                        <td>أضافه صنف جديد</td>
                    </tr>
                    {{-- Masssge --}}
                    @if (session('status'))
                        <div class="my-1 transition" id="alert">
                            <h1 class=" w-full flex justify-center items-center text-bold bg-green-400 py-3">
                                {{ session('status') }}
                            </h1>
                        </div>
                        <script>
                            const alert = document.getElementById("alert");
                            alert.style.opctiy = "block";
                            setTimeout(function() {
                                alert.style.opacity = "0";
                                setTimeout(function() {
                                    alert.style.display = "none";
                                }, [150])
                            }, [2000])
                        </script>
                    @endif
                    {{-- Input Name --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input name="name" type="text" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:الأسم التجاري</td>
                    </tr>
                    {{-- Input الكميه --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input name="mount" type="text"
                                class="w-[70%]  border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الكميه</td>
                    </tr>
                    {{-- Input ألقسم --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><select name="cat"
                                class="w-[70%] text-center border border-gray-400">
                                {{-- Here Option  --}}
                                @foreach ($cat as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:ألقسم</td>
                    </tr>
                    {{-- Input ألوحده --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><select name="unit"
                                class="w-[70%] text-center border border-gray-400">
                                @foreach ($units as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:ألوحده</td>
                    </tr>
                    {{-- Input الجمله السعر --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input name="wholesale_price" type="number"
                                class="w-[70%] border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: سعر الجمله</td>
                    </tr>
                    {{-- Input  سعر البيع --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input name="sales_price" type="number"
                                class="w-[70%] border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: سعر البيع</td>
                    </tr>
                    {{-- Input  حد النواقص --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="number" name="limit_Short"
                                class="w-[70%] border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: حد النواقص</td>
                    </tr>
                    {{-- Input تأريخ --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="date" name="overTime"
                                class="w-[70%] text-center"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: تأريخ الصلاحيه</td>
                    </tr>
                    {{-- Input ظهور اون لاين --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><select name="isDisplay"
                                class="w-[70%] text-center border border-gray-400">
                                <option value="1">نعم</option>
                                <option value="0">لا</option>
                            </select></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:ظهور اون لاين</td>
                    </tr>
                    {{-- Input الموصفات --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <textarea class="w-[70%]  border border-gray-400 text-center border " name="description" id="" cols="30"
                                rows="5"></textarea>
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الموصفات </td>
                    </tr>
                    {{-- Input السعر --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input name="barcode" type="number"
                                class="w-[70%] border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الباركود</td>
                    </tr>
                    {{-- Input صوره --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input name="img" type="file"
                                class="w-[70%] border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: أضافه صوره</td>
                    </tr>
                    {{-- button --}}
                    <tr>
                        <td colspan="2" class=" bg-white flex justify-center my-2">
                            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">حفظ
                                المنتج</button>
                        </td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
@endsection
