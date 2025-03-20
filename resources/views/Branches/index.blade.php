@extends('layout')
@section('content')

<div class="w-[90%] flex justify-start flex-col bg-white mt-9">
    <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
        الفروع
    </div>

    <div class="flex flex-row justify-end items-center h-14 ">
        <a href="{{ route('branches.create') }}" title='إضافة فرع جديد' class="bg-orange-500 px-5 py-1 hover:scale-110 transition">
            <img src="{{ asset('img/add.png') }}" width="21px" alt="">
        </a>
        <form class="flex justify-end ml-2">
            <button type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition">
                <img src="{{ asset('img/search.png') }}" width="20px" alt="">
            </button>
            <input type='text' name='search' autocomplete='off' placeholder=' بحث الفروع' class="border-2 border-gray-500 mr-2 w-[350px] text-center"/>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">حذف</td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">تعديل</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">رقم الواتساب</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الرقم الضريبي</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">العنوان</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">رقم الهاتف</td>
                <td class="flex-7 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الاسم</td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">م</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($branches as $branch)
            <tr>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">
                    <form action="{{ route('branches.destroy', $branch->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full">
                            <img src="{{ asset('img/delete.png') }}" width="22px" class="m-auto hover:scale-110 transition" alt="">
                        </button>
                    </form>
                </td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">
                    <div onclick="ShowUpdate(true, '{{ $branch->id }}', '{{ $branch->name }}', '{{ $branch->phone }}', '{{ $branch->address }}', '{{ $branch->whatesApp }}', '{{ $branch->numberTaxes }}')">
                        <img src="{{ asset('img/edit.png') }}" width="22px" class="m-auto hover:scale-110 transition">
                    </div>
                </td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">{{ $branch->whatesApp }}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">{{ $branch->numberTaxes }}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">{{ $branch->address }}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">{{ $branch->phone }}</td>
                <td class="flex-7 text-right border border-gray-400 pr-2 py-1">{{ $branch->name }}</td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">{{ $loop->iteration }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- نموذج تعديل الفرع -->
<form id="Mainwindow" style="display: none;">
    <div class="Center">
        <h1 class="text-2xl text-green-600 font-bold mb-5">تعديل الفرع</h1>
        <input type="hidden" id="branch_id" name="branch_id">
        <div class="w-full flex my-2 justify-center">
            <input type="text" id="branch_name" name="name" placeholder="الاسم" class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5 w-1/4 text-center font-bold text-sky-600 text-xl">الاسم</h1>
        </div>
        <div class="w-full flex my-2 justify-center">
            <input type="text" id="branch_phone" name="phone" placeholder="رقم الهاتف" class="w-2/3 text-center m-auto border border-gray-400 font-bold my-3">
            <h1 class="mr-5 w-1/4 text-center font-bold text-sky-600 text-xl">رقم الهاتف</h1>
        </div>
        <div class="w-full flex my-2 justify-center">
            <input type="text" id="branch_address" name="address" placeholder="العنوان" class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5 w-1/4 text-center font-bold text-sky-600 text-xl">العنوان</h1>
        </div>
        <div class="w-full flex my-2 justify-center">
            <input type="text" id="branch_whatsapp" name="whatsapp" placeholder="رقم الواتساب" class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5 w-1/4 text-center font-bold text-sky-600 text-xl">رقم الواتساب</h1>
        </div>
        <div class="w-full flex my-2 justify-center">
            <input type="text" id="branch_tax_number" name="numberTaxes" placeholder="الرقم الضريبي" class="w-2/3 text-center m-auto border border-gray-400 font-bold">
            <h1 class="mr-5 w-1/4 text-center font-bold text-sky-600 text-xl">الرقم الضريبي</h1>
        </div>
        <div class="w-full flex my-2 justify-center mt-3">
            <div onclick="ShowUpdate(false)"
                class="bg-red-600 px-14 py-2 mx-2 text-white font-bold hover:bg-red-800 transition">
                الغاء
            </div>
            <button type="submit" class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">
                تعديل
            </button>
        </div>
    </div>
</form>

<script>
    function ShowUpdate(show, id = '', name = '', phone = '', address = '', whatsapp = '', taxNumber = '') {
        const winUpdate = document.getElementById("Mainwindow");
        const branchIdInput = document.getElementById("branch_id");
        const branchNameInput = document.getElementById("branch_name");
        const branchPhoneInput = document.getElementById("branch_phone");
        const branchAddressInput = document.getElementById("branch_address");
        const branchWhatsappInput = document.getElementById("branch_whatsapp");
        const branchTaxNumberInput = document.getElementById("branch_tax_number");

        if (show === true) {
            branchIdInput.value = id;
            branchNameInput.value = name;
            branchPhoneInput.value = phone;
            branchAddressInput.value = address;
            branchWhatsappInput.value = whatsapp;
            branchTaxNumberInput.value = taxNumber;
            winUpdate.style.display = "block";
        } else {
            winUpdate.style.display = "none";
        }
    }

    document.getElementById("Mainwindow").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        const id = document.getElementById("branch_id").value;
        const name = document.getElementById("branch_name").value;
        const phone = document.getElementById("branch_phone").value;
        const address = document.getElementById("branch_address").value;
        const whatsapp = document.getElementById("branch_whatsapp").value;
        const taxNumber = document.getElementById("branch_tax_number").value;

fetch(`/branches/${id}`, {
    method: 'PUT',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: JSON.stringify({
        name: name,
        phone: phone,
        address: address,
        whatesApp: whatsapp,
        numberTaxes: taxNumber,
    })
})
.then(response => {
    if (!response.ok) {
        return response.json().then(data => {
            throw new Error(data.message || 'Error updating branch.');
        });
    }
    location.reload(); // Reload the page to see the updated data
})
.catch(error => console.error('There was a problem with the fetch operation:', error));
    });
</script>

@endsection