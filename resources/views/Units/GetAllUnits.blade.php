@extends('layout')
@section('content')
    <div class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            الوحدات
        </div>
        
{{-- Masssge --}}
        @if (session('status'))
            <div class="my-1 transition" id="alert">
                <h1 class=" w-full flex justify-center items-center text-bold bg-green-400 py-3"> {{ session('status') }}
                </h1>
            </div>

            <script>
                const alert = document.getElementById("alert");
                alert.style.opctiy = "block";
                setTimeout(function() {
                    alert.style.opacity = "0";
                    setTimeout(function() {
                        alert.style.display = "none";
                    }, [150])
                }, [2000])
            </script>

        @endif
        <form action="{{ route('add.units')}}" method="POST">
            @csrf
            <table class="w-full">
                <thead>
                    <tr></tr>
                    {{-- Input Name --}}
                    <tr class="w-full flex justify-end items-center py-2 mt-10">
                        <td class="w-4/5 flex justify-end"><input type="text" name="name" class="w-[70%]"></td>
                        <td class="w-1/5 flex justify-end mr-2 font-bold">:الأسم</td>
                    </tr>
                  

                    <tr></tr>
                    <tr>
                        <td colspan="2" class=" bg-white flex justify-center my-2">
                            <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">اضافه</button>
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
                       
                        <td class=" flex-7 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            اسم الوحده
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
                    @foreach ($date as $item)
                        <tr>
                            <td class=" flex-1 text-right border border-gray-400 pr-2 py-1  ">
                                <form action="{{ route('delete.units', [$item->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="w-full">
                                        <img src="{{ asset('img/delete.png') }}" width="22px"
                                            class="m-auto hover:scale-110 transition" alt="">
                                    </button>
                                </form>
                            </td>
                            <td class=" flex-1 text-right border border-gray-400 pr-2 py-1  ">
                                <button  onclick="ShowUpdate(true)">
                                    <img src="{{ asset('img/edit.png') }}" width="22px"
                                        class="m-auto hover:scale-110 transition" alt=""></button>
                            </td>
                            </td>
                            <td  class=" flex-7 text-right border border-gray-400 pr-2 py-1  font-bold"> {{ $item->name }}
                            </td>
                            <td  class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">{{ $item->id }} </td>
                        </tr>
                    @endforeach
                </th>
            </tbody>

        </table>
    </div>
@endsection
<form id="Mainwindow" >
    <div class="Center">
        <h1 class="text-2xl text-green-600 font-bold mb-5">تعديل الوحده</h1>
        <div class="w-full flex my-2  justify-center">
            <input type="text" placeholder="اسم المنتج"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5 w-1/4 text-center  font-bold text-sky-600 text-xl">اسم الوحده</h1>
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
 
{{-- سكريبت التعامل مع نافذة التعديل --}}
<script>
    function ShowUpdate(show, id = null, name = null) {
        const winUpdate = document.getElementById("Mainwindow");
        const unitId = document.getElementById("unitId");
        const unitName = document.getElementById("unitName");

        if (show === true) {
            winUpdate.style.display = "block";
        } else {
            winUpdate.style.display = "none";
        }
    }
</script>