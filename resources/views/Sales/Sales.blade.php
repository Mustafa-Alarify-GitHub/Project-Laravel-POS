@extends('layout')
@section('content')
    <form class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="w-full">

        </div>
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            ألمبيعات
        </div>
        <div class="w-full flex flex-row justify-end my-5">
            <button class="bg-green-600 px-10 mr-3 py-2 text-white font-bold hover:bg-green-800 transition">أضافه
            </button>
            <input type="number" class="border border-gray-500 text-center w-20" placeholder="الكميه">
            <select class="w-[10%] text-center border border-gray-400">
                <option value="">بيع</option>
                <option value="">ارجاع</option>
            </select>

            <select class="w-[40%] text-center border border-gray-400">
                <option value="">------------- أختر المنتج -------------</option>
            </select>

        </div>
        <table>
            <thead>

                <tr>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الاجمالي</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الكميه</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">السعر
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">القسم</td>
                    </td>
                    <td class=" flex-3 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        اسم الصنف</td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">م </td>
                </tr>
            </thead>
            <tbody>
                {{-- for each  --}}
                <tr>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">200</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">2</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">100
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">مشروبات</td>
                    </td>
                    <td class=" flex-3 text-right border border-gray-400 pr-2 py-1 ">
                        شاي </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">1 </td>
                </tr>
                {{-- End for each  --}}
            </tbody>
            <tfoot>
                <tr></tr>
                <tr>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">50</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold" colspan="2">
                        أجمالي الضريبه
                    </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">200</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold" colspan="2">
                        الاجمالي</td>
                </tr>
                <tr></tr>
                <tr class="mt-4">
                    <td colspan="3" class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        250 </td>
                    <td colspan="3" class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        أجمالي بعد الضريبه</td>

                </tr>
            </tfoot>
        </table>
        <hr class="border border-black mt-5">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400 mt-5">
            العميل
        </div>

        <table class="w-full">
            <thead>

                {{-- Input ألقسم --}}
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end">
                        <a href="" class="mr-4 hover:scale-110 transition"><img src="{{ asset('img/addb.png') }}"
                                alt=""></a>
                        <select class="w-[70%] text-center border border-gray-400">
                            {{-- Here Option  --}}
                            <option value="">MMMM</option>
                            <option value="">AAA</option>
                        </select>
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">:العميل</td>
                </tr>
                {{-- Input السعر --}}
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end"><input type="number" class="w-[70%] border border-gray-400"></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: طرق الدفع</td>
                </tr>
                
                {{-- Input الموصفات --}}
                <tr class="w-full flex justify-end items-center py-2 border border-gray-400">
                    <td class="w-4/5 flex justify-end">
                        <textarea class="w-[70%] text-center border border-gray-400" name="" id="" cols="30" rows="5"></textarea>
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: الموصفات </td>
                </tr>

                {{-- button --}}
                <tr>
                    <td colspan="2" class=" bg-white flex justify-center my-2">
                        <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">
                            <a href="{{ route('print') }}">حفظ وطباعه فاتوره</a>
                        </button>
                    </td>
                </tr>
            </thead>
        </table>
    </form>
@endsection
