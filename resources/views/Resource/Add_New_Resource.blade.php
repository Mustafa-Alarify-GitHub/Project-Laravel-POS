@extends('layout')
@section('content')
    <div class="w-[95%] mt-10 bg-white Myshadow">
        <form>
            <table class="w-full">
                <thead>
                    <tr class="w-full flex justify-center items-center text-xl py-2">
                        <td>أضافه مورود جديد</td>
                    </tr>
                    {{-- Input Name --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="text" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:الأسم </td>
                    </tr>
                    {{-- Input تيلفون --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="number" class="border border-gray-400 w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:رقم جوال </td>
                    </tr>
                    {{-- Input عنوان --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="text" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:عنوان </td>
                    </tr>
                    {{-- Input البريد --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end ">
                            <input type="text" class="w-[70%] border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:البريد </td>
                    </tr>
                    {{-- Input وصف --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <textarea class="w-[70%] border border-gray-400" name="" id="" cols="30" rows="10"></textarea>
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:وصف </td>
                    </tr>
                    
                   {{-- button --}}
                    <tr>
                        <td colspan="2" class=" bg-white flex justify-center my-2">
                            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">
                                أضاقه 
                            </button>
                        </td>
                    </tr>
                    <tr class="w-full flex justify-center gap-5 mt-3 items-center text-sm underline text-sky-500  py-2">
                        <td><a href="{{ route('home') }}" class="hover:text-red-600 transition">ألرئيسيه</a> </td>
                        <td><a href="{{ route('GetAllResource') }}" class="hover:text-red-600 transition">  الموارد </a>
                        </td>
                    </tr>

                </thead>
            </table>
        </form>
    </div>
@endsection
