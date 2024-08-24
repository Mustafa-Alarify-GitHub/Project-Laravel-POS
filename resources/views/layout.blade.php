<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="flex justify-between flex-row w-screen h-screen">
        <div class=" overflow-auto w-1/6 bg-blue-950 flex justify-start items-center flex-col">

            {{-- Start Link --}}
            <a href={{ route('home') }}
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/dashboard.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">لوحه التحكم</h1>
            </a>
            {{-- End Link --}}

            {{-- Start Link --}}
            <a href="{{ route('Add_Items') }}"
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/add_shopping.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    أضافه صنف جديد
                </h1>
            </a>
            {{-- End Link --}}
            {{-- Start Link --}}
            <a href="{{ route('Sales') }}"
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/sales.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    المبيعات
                </h1>
            </a>
            {{-- End Link --}}

          

            {{-- Start Link --}}
            <a href="{{ route('Branch') }}" class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition" >
            <div class=" flex justify-center w-1/4 h-full items-center">
                <img src={{ asset('img/branch.png') }} width="30px" >
            </div>
            <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    الفروع
            </h1>
            </a>
            {{-- End Link --}}

                {{-- Start Link --}}
                <a href="{{ route('Empleoy') }}" class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition" >
                    <div class=" flex justify-center w-1/4 h-full items-center">
                        <img src={{ asset('img/employee.png') }} width="30px" >
                    </div>
                    <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                        الموظفين
                    </h1>
                </a>
                {{-- End Link --}}
                
                {{-- Start Link --}}
                <a href="{{ route('Custmer') }}" class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition" >
                    <div class=" flex justify-center w-1/4 h-full items-center">
                        <img src={{ asset('img/client.png') }} width="30px" >
                    </div>
                    <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                        العملاء
                    </h1>
                </a>
                {{-- End Link --}}
                <a href="{{ route('Inventory') }}" class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition" >
                    <div class=" flex justify-center w-1/4 h-full items-center">
                        <img src={{ asset('img/stock.png') }} width="30px" >
                    </div>
                    <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                        الجرد
                    </h1>
                </a>
                {{-- End Link --}}
           
         
            {{-- Start Link --}}
            <a href="{{ route('cat') }}"
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/cat.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    ألاقسام
                </h1>
            </a>
            {{-- End Link --}}

            {{-- Start Link --}}
            <a href="{{ route('purchases') }}"
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/buy.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    المشتريات
                </h1>
            </a>
            {{-- End Link --}}

            {{-- Start Link --}}
            <a href={{ route('Expenses') }}
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/expensive.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    المصروفات
                </h1>
            </a>
            {{-- End Link --}}
           
            {{-- Start Link --}}
            <a href={{ route('AddNewResource') }}
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/supplier.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    الموردين
                </h1>
            </a>
            {{-- End Link --}}
           
            {{-- Start Link --}}
            <a href={{ route('Transfer') }}
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/transfer.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    التحويل
                </h1>
            </a>
            {{-- End Link --}}
            {{-- Start Link --}}
            <a href={{ route('Addpromotonal') }}
                class="w-[95%] text-gray-400  h-12 flex justify-between hover:underline my-1 hover:text-white  transition">
                <div class=" flex justify-center w-1/4 h-full items-center">
                    <img src={{ asset('img/transfer.png') }} width="30px">
                </div>
                <h1 class=" flex justify-start transition items-center w-3/4 h-full font-bold">
                    العروض الترويجيه
                </h1>
            </a>
            {{-- End Link --}}

        </div>
        <div class="h-full w-5/6 bg-gray-200 flex justify-center  overflow-scroll">
            @yield('content')
        </div>

    </div>
</body>

</html>
