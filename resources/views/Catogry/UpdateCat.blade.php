@extends('layout')
@section('content')
    <div class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="flex justify-center items-center h-14 text-3xl bg-gray-100 font-bold text-sky-400">
            تعديل
        </div>

        <form>
            <table class="w-full">
                <thead>
                    <tr></tr>
                    {{-- Input Name --}}
                    <tr class="w-full flex justify-end items-center py-2 mt-10">
                        <td class="w-4/5 flex justify-end"><input type="text" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:الأسم</td>
                    </tr>
                    {{-- Input ألضريبه --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="number" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">ألضريبه</td>
                    </tr>

                    <tr></tr>
                    <tr>
                        <td class=" bg-white flex justify-center my-2">
                            <a class="bg-red-600 px-14 py-2 text-white font-bold hover:bg-red-800 cursor-pointer transition mr-4">
                                الغاء التعديل
                            </a>
                            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">
                                حفظ
                            </button>
                        </td>
                    </tr>

                </thead>
            </table>
        </form>
    </div>
@endsection
