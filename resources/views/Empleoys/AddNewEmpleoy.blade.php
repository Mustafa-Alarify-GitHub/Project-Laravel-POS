@extends('layout')
@section('content')
    <div class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            أضافه موظف جديده
        </div>

        <form>
            <table class="w-full">
                <thead>
                    <tr></tr>
                    {{-- Input Name --}}
                    <tr class="w-full flex justify-end items-center py-2 mt-10">
                        <td class="w-4/5 flex justify-end"><input type="text" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الأسم</td>
                    </tr>
                    {{-- Input رقم الهوية --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="text" class="w-[70%] border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الهوية</td>
                    </tr>
                    {{-- Input تاريخ الميلاد --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="date" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">تاريخ الميلاد</td>
                    </tr>
                    {{-- Input الجنس --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="text" class="w-[70%] border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">الجنس</td>
                    </tr>
                    {{-- Input العنوان --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="text" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">العنوان</td>
                    </tr>
                    {{-- Input رقم الهاتف --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="text" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الهاتف</td>
                    </tr>
                    {{-- Input البريد الالكتروني--}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="email" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">البريد الالكتروني</td>
                    </tr>
                    {{-- Input انشاء كلمة مرور--}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="password" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">انشاء كلمة مرور</td>
                    </tr>
                    {{-- Input  الصلاحيات --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><select class="w-[70%] text-center border border-gray-400">
                                {{-- Here Option  --}}
                                <option value="">مدير النظام</option>
                                <option value="">مدير فرع</option>
                                <option value="">مستخدم</option>
                            </select></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">الصلاحيات</td>
                    </tr>

                    {{-- Input  الفرع--}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><select class="w-[70%] text-center border border-gray-400">
                                {{-- Here Option  --}}
                                <option value="">ا</option>
                                <option value="">ب</option>
                            </select></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:الفرع</td>
                    </tr>

                    {{-- Input  تاريخ مباشرة العمل--}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="date" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">تاريخ مباشرة العمل</td>
                    </tr>
                    {{-- Input  رقم القيد--}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="text" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">رقم القيد</td>
                    </tr>
                    {{-- Input  رقم الحساب--}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="text" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الحساب</td>
                    </tr>
                    {{-- Input  اسم البنك--}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end "><input type="text" class="w-[70%]  border border-black"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">اسم البنك</td>
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
                        <td><a href="{{ route('Empleoy') }}" class="hover:text-red-600 transition">الفروع</a> </td>
                        <td><a href="{{ route('home') }}" class="hover:text-red-600 transition mx-2">ألرئيسيه</a> </td>  
                    </tr>
                </thead>
            </table>
        </form>
    </div>
@endsection
