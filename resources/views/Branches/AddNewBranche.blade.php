@extends('layout')
@section('content')
    <div class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            أضافه فرع جديده
        </div>

        <form>
            <table class="w-full">
                <thead>
                    <tr></tr>
                    {{-- Input Name --}}
                    <tr class="w-full flex justify-end items-center py-2 mt-10">
                        <td class="w-4/5 flex justify-end"><input type="text" name="name" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الأسم بالعربية</td>
                    </tr>
                    {{-- Input الأسم بالانجليزية --}}
                    
                    {{-- Input العنوان --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="text" name="address" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">العنوان</td>
                    </tr>
                    {{-- Input رقم الهاتف --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="text" name="phone" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الهاتف</td>
                    </tr>
                    {{-- Input رقم الواتساب--}}
                    <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end "><input type="text" name="whatesApp" class="w-[70%]  border border-black"></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الواتساب</td>
                    </tr>
                    {{-- Input البريد الالكتروني--}}
                    <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end "><input type="email" name="email" class="w-[70%]  border border-black"></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">البريد الالكتروني</td>
                    </tr>

                    </tr>
                    {{-- Input الرقم الضريبي--}}
                    <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end "><input type="text" name="numberTaxes" class="w-[70%]  border border-black"></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">الرقم الضريبي</td>
                    </tr>

                    <tr></tr>
                    <tr>
                        <td colspan="2" class=" bg-white flex justify-center my-2">
                            <button class="bg-orange-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">استعادة
                            </button>

                            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition mx-1">اضافة
                            </button>
                        </td>

                    </tr>
                    <tr class="w-full flex justify-center gap-5 mt-3 items-center text-sm underline text-sky-500  py-2">
                        <td><a href="{{ route('Branch') }}" class="hover:text-red-600 transition">الفروع</a> </td>
                        <td><a href="{{ route('home') }}" class="hover:text-red-600 transition mx-2">ألرئيسيه</a> </td>  
                    </tr>
                </thead>
            </table>
        </form>
    </div>
@endsection
