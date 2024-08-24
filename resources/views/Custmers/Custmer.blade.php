@extends('layout')
@section('content')

<div class="w-[90%] flex justify-start flex-col bg-white mt-9">
    <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
        العملاء
    </div>

    <div class="flex flex-row justify-end items-center h-14 ">
        <a href="{{ route('Add_Custmers') }}" title='إضافة عميل جديد' type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition"><img
                src="{{ asset('img/add.png') }}" width="21px" alt=""></a>
        {{-- Search --}}
        <form class=" flex justify-end ml-2">
            <button type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition"><img
                    src="{{ asset('img/search.png') }}" width="20px" alt=""></button>
                    <input type='text'  name='search'   autocomplete='off'  placeholder=' بحث العملاء' class="border-2 border-gray-500 mr-2 w-[350px] text-center"/>

        </form>
    </div>

    <table>
        <thead>
            <th>
                <tr>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        حذف
                    </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        تعديل
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        هاتف المندوب
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        اسم المندوب
                    </td>

                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        رقم الهاتف	
                    </td>
                    <td class=" flex-7 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        الاسم
                    </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        م
                    </td>
                </tr>
            </th>
        </thead>
        <tbody>
            <th>
                <tr></tr>
                {{-- ------------------------------------ --}}
                {{-- For each Here --}}
                {{-- ------------------------------------ --}}
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
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">1585858582</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">الالالرفلفلف</td>

                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">967778524560</td>
                    <td class=" flex-7 text-right border border-gray-400 pr-2 py-1  font-bold"> omar alomare</td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">1 </td>
                </tr>
            </th>
        </tbody>

    </table>
</div>
@endsection
