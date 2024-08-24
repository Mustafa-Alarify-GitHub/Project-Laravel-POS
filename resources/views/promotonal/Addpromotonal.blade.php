@extends('layout')
@section('content')
    <form class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="w-full flex justify-center gap-5  bg-gray-200 items-center text-sm underline text-sky-500 mb-3  py-2">
            <a href="{{ route('home') }}" class="hover:text-red-600 transition">ألرئيسيه</a>
            <a href="{{ route('GetAll_promotonal') }}" class="hover:text-red-600 transition"> عرض جميع العروض</a>
        </div>
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            العروض الترويجيه
        </div>
        <div class="w-full flex flex-row justify-end my-5">

            <table class="w-full">
                <thead>


                    {{-- Input تأريخ --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <select class="w-3/5 text-center m-auto border border-gray-400 font-bold">

                                <option value="">-- المنتج --</option>

                                <option value="">جرام</option>
                                <option value="">حبه</option>
                                <option value="">كيلو</option>
                                <option value="">لتر</option>
                                <option value="">وحده</option>
                            </select>
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:  المنتج </td>
                    </tr>
                    {{-- Input تأريخ --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="date"
                                class="w-[70%] text-center border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: من تاريخ </td>
                    </tr>
                    {{-- Input تأريخ --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="date"
                                class="w-[70%] text-center border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الي تاريخ </td>
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
                                حفظ 
                            </button>
                        </td>
                    </tr>
                </thead>
            </table>

    </form>
@endsection
