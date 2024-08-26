@extends('layout')
@section('content')
    <div class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            أضافه مجموعه جديده
        </div>

        <form action="{{ route('cat.store')}}" method="POST">
            @csrf
            <table class="w-full">
                <thead>
                    <tr></tr>
                    {{-- Input Name --}}
                    <tr class="w-full flex justify-end items-center py-2 mt-10">
                        <td class="w-4/5 flex justify-end"><input type="text" name="name" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:الأسم</td>
                    </tr>
                    {{-- Input ألضريبه --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="number" name="texses"
                                class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">ألضريبه</td>
                    </tr>

                    <tr></tr>
                    <tr>
                        <td colspan="2" class=" bg-white flex justify-center my-2">
                            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">حفظ
                                المنتج</button>
                        </td>
                    </tr>
                    <tr class="w-full flex justify-center gap-5 mt-3 items-center text-sm underline text-sky-500  py-2">
                        <td><a href="{{ route('home') }}" class="hover:text-red-600 transition">ألرئيسيه</a> </td>
                        <td><a href="{{ route('cat') }}" class="hover:text-red-600 transition"> الاقسام او المجموعات</a>
                        </td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
@endsection
