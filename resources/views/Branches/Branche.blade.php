@extends('layout')
@section('content')

<div class="w-[90%] flex justify-start flex-col bg-white mt-9">
    <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
        الفروع
    </div>

    <div class="flex flex-row justify-end items-center h-14 ">
        <a href="{{ route('Add_Branchs') }}" title='إضافة فرع جديد' type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition"><img
                src="{{ asset('img/add.png') }}" width="21px" alt=""></a>
        {{-- Search --}}
        <form class=" flex justify-end ml-2">
            <button type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition "><img
                    src="{{ asset('img/search.png') }}" width="20px" alt=""></button>
                    <input type='text'  name='search'   autocomplete='off'  placeholder=' بحث الفروع' class="border-2 border-gray-500 mr-2 w-[350px] text-center"/>

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
                        الموقع
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        رفع الشعار
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        العنوان
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
                        <div onclick="ShowUpdate(true)">
                            <img src="{{ asset('img/edit.png') }}" width="22px" class="m-auto hover:scale-110 transition">
                        </div>
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold "><a href="#">تعديل</a></td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">رفع</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">صنعاء</td>

                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">967778524560</td>
                    <td class=" flex-7 text-right border border-gray-400 pr-2 py-1  font-bold"> omar alomare</td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">1 </td>
                </tr>
            </th>
        </tbody>

    </table>
</div>
@endsection

<form id="Mainwindow" >
    <div class="Center">
        <h1 class="text-2xl text-green-600 font-bold mb-5">تعديل الفرع</h1>
        <div class="w-full flex my-2  justify-center">
            <input type="text" placeholder="الاسم"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5 w-1/4 text-center  font-bold text-sky-600 text-xl">الاسم</h1>
        </div>
        <div class="w-full flex  my-2 justify-center">
            <input type="text" placeholder="رقم الهاتف"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold my-3">
            <h1 class="mr-5  w-1/4 text-center font-bold text-sky-600 text-xl">رقم الهاتف </h1>
        </div>
        <div class="w-full flex  my-2 justify-center">
            <input type="text" placeholder=" العنوان"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5  w-1/4 text-center font-bold text-sky-600 text-xl"> العنوان </h1>
        </div>

        <div class="w-full flex  my-2 justify-center mt-3">
            <div onclick="ShowUpdate(false)"
                class="bg-red-600 px-14 py-2 mx-2 text-white font-bold hover:bg-red-800 transition">
                الغاء
            </div>
            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">
                تعديل
            </button>
        </div>
    </div>
</form>
<script>
    function ShowUpdate(show) {
        // TODO Add datein fileds
        const winUpdate = document.getElementById("Mainwindow");
        if (show === true) {
            winUpdate.style.display = "block";
        } else {
            winUpdate.style.display = "none";
        }

    }
</script>