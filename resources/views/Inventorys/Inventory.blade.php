@extends('layout')
@section('content')
    <form class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="w-full">

        </div>
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            الجرد
        </div>
        <div class="w-full flex flex-row justify-end my-5">
            <button class="bg-green-600 px-10 mr-3 py-2 text-white font-bold hover:bg-green-800 transition">أضافه
            </button>
            <input type="text" class="border border-gray-500 text-center w-80" placeholder="اسم الصنف كود باركود">
            <input type="number" class="border border-gray-500 text-center w-20" placeholder="الكميه">
        </div>
        <table>
            <thead>

                <tr>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        حذف
                    </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        تعديل
                    </td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">المستخدم</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الاجمالي</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">السعر</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الوحدة</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الفرق</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الكميه الفعلية</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الكمية بالنظام
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">المخزن</td>
                    </td>
                    <td class=" flex-3 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                         الصنف</td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">التاريخ</td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">م </td>
                </tr>
            </thead>
            <tbody>
                {{-- for each  --}}
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
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">علي</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">18</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">18</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">وحدة كبرى</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">15</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">35</td>
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">50
                    <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 ">ماركت أ</td>
                    </td>
                    <td class=" flex-3 text-right border border-gray-400 pr-2 py-1 ">
                        شاي </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">1/2001 </td>
                    <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">1 </td>
                </tr>
                {{-- End for each  --}}
            </tbody>

        </table>



    </form>
    <div>
        <div colspan="2" class=" bg-white flex justify-center my-2">
            <input type="text" class="border border-gray-500 text-center w-80" placeholder="ملاحظات">
            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition mx-1">حفظ
            </button>
        </div>
    </div>

    <div class="w-full flex justify-center gap-5 mt-3 items-center text-sm underline text-sky-500  py-2">
        <a href="{{ route('Branch') }}" class="hover:text-red-600 transition">محاضر الجرد</a> 
        <a href="{{ route('Branch') }}" class="hover:text-red-600 transition">تقرير الاصناف التي لم يتم جردها</a> 
        <a href="{{ route('Branch') }}" class="hover:text-red-600 transition">تقرير الاصناف التي تم جردها</a> 
        <a href="{{ route('home') }}" class="hover:text-red-600 transition mx-2">تصفير الاصناف التى لم يتم لها جرد</a>   
    </div>


    <hr class="border border-black mt-5"> 

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