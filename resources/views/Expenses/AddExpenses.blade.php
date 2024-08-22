@extends('layout')
@section('content')
<form  class="w-[95%] mt-10 bg-white Myshadow">
    <table class="w-full">
        <thead>
            <tr class="w-full flex justify-center items-center text-xl py-2">
                <td>أضافه مصروف جديد</td>
            </tr>
            
            {{-- Input السعر --}}
            <tr class="w-full flex justify-end items-center py-2">
                <td class="w-4/5 flex justify-end"><input type="number" class="w-[70%] border border-gray-400"></td>
                <td class="w-1/5 flex justify-end mr-2 font-bold">: السعر</td>
            </tr>
            {{-- Input الضريبه --}}
            <tr class="w-full flex justify-end items-center py-2">
                <td class="w-4/5 flex justify-end"><input type="number" class="w-[70%] border border-gray-400"></td>
                <td class="w-1/5 flex justify-end mr-2 font-bold">: الضريبه</td>
            </tr>
            {{-- Input تأريخ --}}
            <tr class="w-full flex justify-end items-center py-2">
                <td class="w-4/5 flex justify-end"><input type="date" class="w-[70%] text-center border border-gray-400"></td>
                <td class="w-1/5 flex justify-end mr-2 font-bold">: تأريخ الصلاحيه</td>
            </tr>
          
            {{-- Input الموصفات --}}
            <tr class="w-full flex justify-end items-center py-2">
                <td class="w-4/5 flex justify-end">
                    <textarea class="w-[70%] text-center border border-gray-400" name="" id="" cols="30" rows="5"></textarea>
                </td>
                <td class="w-1/5 flex justify-end mr-2 font-bold">: الموصفات </td>
            </tr>
          
           {{-- button --}}
            <tr>
                <td colspan="2" class=" bg-white flex justify-center my-2">
                    <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">حفظ
                        </button>
                </td>
            </tr>
            <tr class="w-full flex justify-center gap-5 mt-3 items-center text-sm underline text-sky-500  py-2">
                <td><a href="{{ route('home') }}" class="hover:text-red-600 transition">ألرئيسيه</a> </td>
                <td><a href="{{ route('getAllExpenses') }}" class="hover:text-red-600 transition">  المصروفات </a>
                <td><div onclick="ShowUpdate(true)" class="cursor-pointer hover:text-red-600 transition">  تقرير با المصروفات </ي>
                </td>
            </tr>
        </thead>
    </table>
</form>
@endsection

<form id="Mainwindow" >
    <div class="Center">
        <h1 class="text-2xl text-green-600 font-bold mb-5">طباعه تقرير</h1>
        
        
        <div class="w-full flex  my-2 justify-center">
            <input type="date" placeholder=" من"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5  w-1/4 text-center font-bold text-sky-600 text-xl">من </h1>
        </div>
        <div class="w-full flex  my-2 justify-center">
            <input type="date" placeholder=" الي"
                class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5  w-1/4 text-center font-bold text-sky-600 text-xl">الي </h1>
        </div>

       
        <div class="w-full flex  my-2 justify-center mt-3">
            <div onclick="ShowUpdate(false)"
                class="bg-red-600 px-14 py-2 mx-2 text-white font-bold hover:bg-red-800 transition">
                الغاء
            </div>
            <a href={{route('repoart', ['start'=>2,'end'=>2]) }} class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">
                تقرير
            </a>
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
