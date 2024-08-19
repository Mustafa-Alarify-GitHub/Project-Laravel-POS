@extends('layout')
@section('content')
    <div class="w-[95%] mt-10 bg-white Myshadow">
        <form>
            <table class="w-full">
                <thead>
                    <tr class="w-full flex justify-center items-center text-xl py-2">
                        <td>أضافه صنف جديد</td>
                    </tr>
                    {{-- Input Name --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="text" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:الأسم التجاري</td>
                    </tr>
                    {{-- Input ألقسم --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><select class="w-[70%] text-center border border-gray-400">
                                {{-- Here Option  --}}
                                <option value="">MMMM</option>
                                <option value="">AAA</option>
                            </select></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:ألقسم</td>
                    </tr>
                    {{-- Input ألوحده --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><select class="w-[70%] text-center border border-gray-400">
                                {{-- Here Option  --}}
                                <option value="">جرام</option>
                                <option value="">حبه</option>
                                <option value="">كيلو</option>
                                <option value="">لتر</option>
                                <option value="">وحده</option>
                            </select></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:ألوحده</td>
                    </tr>
                    {{-- Input السعر --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="number" class="w-[70%] border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: السعر</td>
                    </tr>
                    {{-- Input تأريخ --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="date" class="w-[70%] text-center"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: تأريخ الصلاحيه</td>
                    </tr>
                    {{-- Input ظهور اون لاين --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><select class="w-[70%] text-center border border-gray-400">
                                <option value="">نعم</option>
                                <option value="">لا</option>
                            </select></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:ظهور اون لاين</td>
                    </tr>
                    {{-- Input تأريخ --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end">
                            <textarea class="w-[70%] text-center" name="" id="" cols="30" rows="5"></textarea>
                        </td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الموصفات </td>
                    </tr>
                    {{-- Input السعر --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="number" class="w-[70%] border border-gray-400"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">: الباركود</td>
                    </tr>
                    {{-- Input صوره --}}
                    <tr class="w-full flex justify-end items-center py-2">
                        <td class="w-4/5 flex justify-end"><input type="file" class="w-[70%] border border-gray-400"></td>
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
