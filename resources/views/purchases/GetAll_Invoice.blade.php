@extends('layout')
@section('content')
    <div class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
           <span><a href="{{ route('purchases') }}"> المشتريات<</a></span> الفواتير
        </div>

        <div class="flex flex-row justify-end items-center h-14 ">
            {{-- Search --}}
            <form class=" flex justify-end ml-2">
                <button type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition"><img
                        src="{{ asset('img/search.png') }}" width="20px" alt=""></button>
                <input type="text" class="border-2 border-gray-500 mr-2 w-[350px] text-center"
                    placeholder=" رقم الفاتوره ">
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
                            الحركه
                        </td>
                        <td class=" flex-7 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            الوقت
                        </td>
                        <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            التاريخ
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
                            <div onclick="ShowUpdate(true)"><img src="{{ asset('img/edit.png') }}"
                                    width="22px" class="m-auto hover:scale-110 transition" alt=""></div>
                        </td>
                        <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">
                            مشتريات
                        </td>
                        <td class=" flex-7 text-right border border-gray-400 pr-2 py-1  font-bold">
                            22:50:30
                        </td>
                        <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">2024/2/10 </td>
                    </tr>
                </th>
            </tbody>

        </table>
    </div>
@endsection

<form id="Mainwindow" >
    <div class="Center">
        <h1 class="text-2xl text-green-600 font-bold mb-5">تعديل المنتج</h1>
        <div class="w-full flex my-2  justify-center">
            <input type="text" placeholder="اسم المنتج"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5 w-1/4 text-center  font-bold text-sky-600 text-xl">اسم المنتج</h1>
        </div>
        <div class="w-full flex  my-2 justify-center">
            <input type="number" placeholder=" الكميه"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold my-3">
            <h1 class="mr-5  w-1/4 text-center font-bold text-sky-600 text-xl">الكميه </h1>
        </div>
        <div class="w-full flex  my-2 justify-center">
            <input type="number" placeholder=" السعر"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5  w-1/4 text-center font-bold text-sky-600 text-xl">السعر </h1>
        </div>

        <div class="w-full flex  my-2 justify-center">

            <select class="w-2/3 text-center m-auto border border-gray-400 font-bold">

                <option value="">-- الوحده --</option>

                <option value="">جرام</option>
                <option value="">حبه</option>
                <option value="">كيلو</option>
                <option value="">لتر</option>
                <option value="">وحده</option>
            </select>
            <h1 class="mr-5  w-1/4 text-center font-bold text-sky-600 text-xl">الوحده </h1>
        </div>
        <div class="w-full flex  my-2 justify-center">

            <select class="w-2/3 text-center m-auto border border-gray-400 font-bold">
                <option value="">-- القسم --</option>
                <option value="">حبه</option>
                <option value="">كيلو</option>
                <option value="">لتر</option>
                <option value="">وحده</option>
            </select>
            <h1 class="mr-5  w-1/4 text-center font-bold text-sky-600 text-xl">القسم </h1>
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
