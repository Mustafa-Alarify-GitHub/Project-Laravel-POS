@extends('layout')
@section('content')

<div class="w-[90%] flex justify-start flex-col bg-white mt-9" dir="rtl">
    <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
        إضافة موظف جديد
    </div>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <table class="w-full">
            <thead>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="text" name="name" class="w-[70%]" placeholder="الاسم" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: الاسم</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="text" name="number_job" class="w-[70%] border border-black" placeholder="الرقم الوظيفي" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الوظيفة</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="text" name="phone" class="w-[70%] border border-black" placeholder="رقم الهاتف" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الهاتف</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="email" name="email" class="w-[70%] border border-black" placeholder="البريد الالكتروني" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">البريد الالكتروني</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="password" name="password" class="w-[70%] border border-black" placeholder="كلمة المرور" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">إنشاء كلمة مرور</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="text" name="Address" class="w-[70%] border border-black" placeholder="العنوان" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">العنوان</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end">
                        <select name="branchs" class="w-[70%] text-center border border-gray-400" required>
                            <option value="">اختر الفرع</option>
                            @foreach ($branches as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: الفرع</td>
                </tr>
                <tr>
                    <td colspan="2" class="bg-white flex justify-center my-2">
                        <button type="reset" class="bg-orange-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">استعادة</button>
                        <button type="submit" class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition mx-1">إضافة</button>
                    </td>
                </tr>
            </thead>
        </table>
    </form>
</div>

@endsection