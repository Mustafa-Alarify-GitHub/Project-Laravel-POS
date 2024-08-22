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
            <button type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition"><img
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
                        <a href="{{ route('update_cat', ['id' => 1]) }}"><img src="{{ asset('img/edit.png') }}"
                                width="22px" class="m-auto hover:scale-110 transition" alt=""></a>
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











    {{-- <div class="w-[95%] mt-10 bg-white Myshadow">

        <table class="w-full">

            <tr class="w-full flex justify-center items-center text-xl py-2">
                <td> الفروع</td>
            </tr>
            <tr>
                <td height='29' colspan='8' bgcolor='#f9f7f7'>
                    <form method='post' action='#' >
                        <div id='SearchFieldContainer12'>
                                <div id='wrapjsuggest12' style='width:70%;'>

                                        <input type='text' name='search'   autocomplete='off'  id='SearchBox12' class='jsuggest12' placeholder=' بحث الفروع' style='width:50%;height:30px;border-radius:0 5px 5px 0;'/>
                                        <button class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition h-8" type='submit' name='submit' value='بحث'>
                                            <i class='fas fa-search'></i> 
                                            بحث  
                                        </button>
                                        <a href='#' title='إضافة فرع جديد'>
                                            <button type='button' class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition h-8"  > 
                                                <i class='fas fa-plus'></i>
                                                اضافة فرع
                                            </button>
                                        </a>
                                </div>  
                        </div>         
                    </form>
                </td>
            </tr>


            <tr bgcolor='#F0F1F2'>
                <td height='29' style='border:1px solid #D4D8DD ; color:green;width:20px; ' >
                    <center>#</center>
                </td>
                <td height='29' style='border:1px solid #D4D8DD ; color:green; ' >الاسم</td>
                <td height='29' style='border:1px solid #D4D8DD ; color:green; ' >رقم الهاتف</td>
                <td height='29' style='border:1px solid #D4D8DD ; color:green; ' >العنوان</td>
                <td height='29' style='border:1px solid #D4D8DD ; color:green; ' >
                    <center> رفع الشعار</center>
                </td>
                <td height='29' style='border:1px solid #D4D8DD ; color:green; ' >
                    <center>الموقع</center>
                </td>
                <td height='29' style='border:1px solid #D4D8DD ; color:green; ' >
                    <center>تحديث</center>
                </td>
                <td height='29' style='border:1px solid #D4D8DD ; color:green; ' >
                    <center>حذف</center>
                </td>
            </tr>

            <tr>
                <td height='29' style='border:1px solid #D4D8DD ;' >
                    <center>1</center>
                </td>
                <td height='29' style='border:1px solid #D4D8DD ;' >omar alomare</td>
                <td height='29' style='border:1px solid #D4D8DD ;' >967778524560</td>
                <td height='29' style='border:1px solid #D4D8DD ;' ></td>
                <td height='29' style='border:1px solid #D4D8DD ;' >
                    <center><a href='#' >رفع</a></center>
                </td>
                <td height='29' style='border:1px solid #D4D8DD ;' >
                    <center><a href='#' >تعديل</a></center>
                </td>
                <td height='29' style='border:1px solid #D4D8DD ;' >
                    <center><a href='#' ><font color='#595656'><i class='far fa-edit'></i></font></a></center>
                </td>
                <td height='29' class='v' style='border:1px solid #D4D8DD ;' >
                    <center><a href='#'><font color='#c75252'><i class='fas fa-trash-alt'></i></font></a></center>
                </td>
            </tr>
        </table>
    </div> --}}
@endsection
