@extends('layout')
@section('content')

<div class="w-[90%] flex justify-start flex-col bg-white mt-9" dir="rtl">
    <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
        أضافه فرع جديده
    </div>

    <form action="{{ route('branches.store') }}" method="POST">
        @csrf
        <div class="w-full flex flex-col items-center">
            <div class="w-[70%] flex justify-between my-2">
                <input type="text" name="name" placeholder="الأسم بالعربية" class="border border-gray-300 rounded p-2 w-full" required>
            </div>
            <div class="w-[70%] flex justify-between my-2">
                <input type="text" name="address" placeholder="العنوان" class="border border-gray-300 rounded p-2 w-full" required>
            </div>
            <div class="w-[70%] flex justify-between my-2">
                <input type="text" name="phone" placeholder="رقم الهاتف" class="border border-gray-300 rounded p-2 w-full" required>
            </div>
            <div class="w-[70%] flex justify-between my-2">
                <input type="text" name="whatesApp" placeholder="رقم الواتساب" class="border border-gray-300 rounded p-2 w-full">
            </div>
            <div class="w-[70%] flex justify-between my-2">
                <input type="email" name="email" placeholder="البريد الالكتروني" class="border border-gray-300 rounded p-2 w-full" required>
            </div>
            <div class="w-[70%] flex justify-between my-2">
                <input type="text" name="numberTaxes" placeholder="الرقم الضريبي" class="border border-gray-300 rounded p-2 w-full" required>
            </div>
            <select name="manger_B" class="border border-gray-300 rounded p-2 w-full" required>
    <option value="">اختر المدير</option>
    @foreach ($managers as $manager)
        <option value="{{ $manager->id }}">{{ $manager->name }}</option>
    @endforeach
</select>
            <div class="w-[70%] flex justify-center my-4">
                <button type="reset" class="bg-orange-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">استعادة</button>
                <button type="submit" class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition mx-1">اضافة</button>
            </div>
            <div class="w-[70%] flex justify-center gap-5 mt-3 items-center text-sm underline text-sky-500 py-2">
                <a href="{{ route('branches.index') }}" class="hover:text-red-600 transition">الفروع</a>
                <a href="{{ route('home') }}" class="hover:text-red-600 transition mx-2">ألرئيسيه</a>
            </div>
        </div>
    </form>
</div>

@endsection