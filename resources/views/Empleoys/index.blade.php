@extends('layout')
@section('content')

<div class="w-[90%] flex justify-start flex-col bg-white mt-9">
    <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
        الموظفين
    </div>

    <div class="flex flex-row justify-end items-center h-14 ">
        <a href="{{ route('employees.create') }}" title='إضافة موظف جديد' class="bg-orange-500 px-5 py-1 hover:scale-110 transition">
            <img src="{{ asset('img/add.png') }}" width="21px" alt="">
        </a>
        <form class="flex justify-end ml-2">
            <button type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition">
                <img src="{{ asset('img/search.png') }}" width="20px" alt="">
            </button>
            <input type='text' name='search' autocomplete='off' placeholder=' بحث عن الموظفين' class="border-2 border-gray-500 mr-2 w-[350px] text-center"/>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">حذف</td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">تعديل</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">البريد الالكتروني</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">رقم الهاتف</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الرقم الوظيفي</td>
                <td class="flex-7 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الاسم</td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">م</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full">
                            <img src="{{ asset('img/delete.png') }}" width="22px" class="m-auto hover:scale-110 transition" alt="">
                        </button>
                    </form>
                </td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">
                    <div onclick="showEditForm({{ $employee }})">
                        <img src="{{ asset('img/edit.png') }}" width="22px" class="m-auto hover:scale-110 transition" alt="">
                    </div>
                </td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">{{ $employee->email }}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">{{ $employee->phone }}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">{{ $employee->number_job }}</td>
                <td class="flex-7 text-right border border-gray-400 pr-2 py-1">{{ $employee->name }}</td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">{{ $loop->iteration }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- نموذج تعديل الموظف -->
<div id="editEmployeeForm" style="display: none; margin-top: 20px;">
    <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
        تعديل موظف
    </div>
    <form id="employeeEditForm" method="POST">
        @csrf
        @method('PUT')
        <table class="w-full">
            <thead>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="text" id="edit_name" name="name" class="w-[70%]" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: الاسم</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="text" id="edit_number_job" name="number_job" class="w-[70%]" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الوظيفة</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="text" id="edit_phone" name="phone" class="w-[70%]" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">رقم الهاتف</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="email" id="edit_email" name="email" class="w-[70%]" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">البريد الالكتروني</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end"><input type="text" id="edit_Address" name="Address" class="w-[70%]" required></td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">العنوان</td>
                </tr>
                <tr>
                    <td class="w-4/5 flex justify-end">
                        <select id="edit_branchs" name="branchs" class="w-[70%]" required>
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
                        <button type="button" onclick="hideEditForm()" class="bg-red-600 px-14 py-2 text-white font-bold hover:bg-red-800 transition">إلغاء</button>
                        <button type="submit" class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition mx-1">تعديل</button>
                    </td>
                </tr>
            </thead>
        </table>
    </form>
</div>

<script>
    function showEditForm(employee) {
        document.getElementById("editEmployeeForm").style.display = "block";
        document.getElementById("employeeEditForm").action = `/employees/${employee.id}`;
        document.getElementById("edit_name").value = employee.name;
        document.getElementById("edit_number_job").value = employee.number_job;
        document.getElementById("edit_phone").value = employee.phone;
        document.getElementById("edit_email").value = employee.email;
        document.getElementById("edit_Address").value = employee.Address;
        document.getElementById("edit_branchs").value = employee.branchs; // سيحتاج إلى تعديل إذا كانت البيانات في شكل مختلف
    }

    function hideEditForm() {
        document.getElementById("editEmployeeForm").style.display = "none";
    }
</script>

@endsection