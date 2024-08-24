@extends('layout')
@section('content')
    <div class="w-[80%] h-full flex flex-col justify-center gap-4">
        <div class="w-full h-[full] flex justify-between flex-row items-center">
            {{-- Card 1 --}}
            <a href="{{ route('Sales') }}" class="w-[30%] h-[200px] bg-white rounded-2xl  flex justify-between flex-col">
                <div class="w-full h-1/2 flex justify-center items-center flex-col">
                    <img src="{{ asset('img/checkou.png') }}" width="40px" alt="">
                    <h1 class="text-xl">sales</h1>
                </div>
                <div class="w-full h-1/2 flex justify-center items-center">
                    <h1 class="text-3xl">المبيعات</h1>
                </div>
            </a>



            {{-- Card 2 --}}
            <a href="{{ route('purchases') }}"
                class="w-[30%]  h-[200px] bg-white rounded-2xl flex justify-between flex-col">
                <div class="w-full h-1/2 flex justify-center items-center flex-col">
                    <img src="{{ asset('img/_open_box.png') }}" width="40px" alt="">
                    <h1 class="text-xl">purchases</h1>
                </div>
                <div class="w-full h-1/2 flex justify-center items-center">
                    <h1 class="text-3xl">المشتريات</h1>
                </div>
            </a>
            {{-- Card 3 --}}
            <a href="{{ route('Expenses') }}" class="w-[30%]  h-[200px] bg-white rounded-2xl flex justify-between flex-col">
                <div class="w-full h-1/2 flex justify-center items-center flex-col">
                    <img src="{{ asset('img/a.png') }}" width="40px" alt="">
                    <h1 class="text-xl">Expenses</h1>
                </div>
                <div class="w-full h-1/2 flex justify-center items-center">
                    <h1 class="text-3xl">المصروفات</h1>
                </div>
            </a>

        </div>
        <div class="w-full h-[full] flex justify-between flex-row items-center">
            {{-- Card 1 --}}
            <a href="{{ route('Empleoy') }}" class="w-[30%]  h-[200px] bg-white rounded-2xl flex justify-between flex-col">
                <div class="w-full h-1/2 flex justify-center items-center flex-col">
                    <img src="{{ asset('img/e.png') }}" width="40px" alt="">
                    <h1 class="text-xl">Empleoy</h1>
                </div>
                <div class="w-full h-1/2 flex justify-center items-center">
                    <h1 class="text-3xl">الموظفين</h1>
                </div>
            </a>
            <a href="{{ route('Custmer') }}" class="w-[30%]  h-[200px] bg-white rounded-2xl flex justify-between flex-col">
                <div class="w-full h-1/2 flex justify-center items-center flex-col">
                    <img src="{{ asset('img/c.png') }}" width="40px" alt="">
                    <h1 class="text-xl">Custmer</h1>
                </div>
                <div class="w-full h-1/2 flex justify-center items-center">
                    <h1 class="text-3xl">العملاء</h1>
                </div>
            </a>

            <a href="{{ route('Add_Items') }}"
                class="w-[30%]  h-[200px] bg-white rounded-2xl flex justify-between flex-col">
                <div class="w-full h-1/2 flex justify-center items-center flex-col">
                    <img src="{{ asset('img/icons8_sell_stock_30px.png') }}" width="40px" alt="">
                    <h1 class="text-xl">Add Item </h1>
                </div>
                <div class="w-full h-1/2 flex justify-center items-center">
                    <h1 class="text-3xl">أضافه صنف</h1>
                </div>
            </a>

        </div>

    </div>
@endsection
