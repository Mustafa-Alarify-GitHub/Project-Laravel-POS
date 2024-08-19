@extends('layout')
@section('content')
    <form class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="w-full">

        </div>
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            المشتريات
        </div>
        <div class="w-full flex flex-row justify-end my-5">
            <button class="bg-green-600 px-10 mr-3 py-2 text-white font-bold hover:bg-green-800 transition">أضافه
            </button>

            <select class="w-[15%] text-center border border-gray-400 font-bold">
                {{-- Here Option  --}}
                <option value="">-- الوحده --</option>

                <option value="">جرام</option>
                <option value="">حبه</option>
                <option value="">كيلو</option>
                <option value="">لتر</option>
                <option value="">وحده</option>
            </select>
            <select class="w-[15%] text-center border border-gray-400 font-bold">
                {{-- Here Option  --}}
                <option value="">-- القسم --</option>
                <option value="">حبه</option>
                <option value="">كيلو</option>
                <option value="">لتر</option>
                <option value="">وحده</option>
            </select>

            <input type="number" placeholder=" السعر" class="w-[10%] text-center border border-gray-400 font-bold">
            <input type="number" placeholder=" الكميه" class="w-[10%] text-center border border-gray-400 font-bold">
            <input type="text" placeholder="اسم المنتج" class="w-[30%] text-center border border-gray-400 font-bold">
        </div>
        <table>
            <thead>

                <tr>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        حذف
                    </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        تعديل
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الاجمالي</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الوحده</td>
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
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1  ">
                        <form>
                            <button type="submit" class="w-full">
                                <img src="{{ asset('img/delete.png') }}" width="22px"
                                    class="m-auto hover:scale-110 transition" alt="">
                            </button>
                        </form>
                    </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1  ">
                        <a href="{{ route('update_cat', ['id' => 1]) }}"><img src="{{ asset('img/edit.png') }}"
                                width="22px" class="m-auto hover:scale-110 transition" alt=""></a>
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">200</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">لتر</td>
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
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold" colspan="2">
                        50
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold" colspan="3">
                        أجمالي الضريبه
                    </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        200
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold" colspan="3">
                        الاجمالي
                    </td>
                </tr>
                <tr></tr>
                <tr class="mt-4">
                    <td colspan="5" class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        250 </td>
                    <td colspan="4" class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
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

                        <input type="text" class="w-[70%] border border-gray-400">
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">:المورد</td>
                </tr>
                {{-- Input رقم الهاتف --}}
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end">
                        <input type="number" class="w-[70%] border border-gray-400">
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: رقم الهاتف</td>
                </tr>
                {{-- Input تأريخ --}}
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end"><input type="date"
                            class="w-[70%] text-center border border-gray-400"></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: تأريخ الشراء</td>
                </tr>

                {{-- Input الموصفات --}}
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end">
                        <textarea class="w-[70%] text-center" name="" id="" cols="30" rows="5"></textarea>
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
