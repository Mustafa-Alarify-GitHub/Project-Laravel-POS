@extends('layout')

@section('content')
    <form id="purchasesForm" class="w-[90%] flex justify-start flex-col bg-white mt-9" action="{{ route('purchases.store') }}" method="POST">
        @csrf
        <div class="w-full flex justify-center gap-5 bg-gray-200 items-center text-sm underline text-sky-500 mb-3 py-2">
            <a href="{{ route('home') }}" class="hover:text-red-600 transition">ألرئيسيه</a>
            {{-- <a href="{{ route('GetAll_Invoice') }}" class="hover:text-red-600 transition">عرض الفواتير المحفوظه</a> --}}
        </div>
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            المشتريات
        </div>
        <div class="w-full flex flex-row justify-end my-5">
            <button type="button" id="addItem" class="bg-green-600 px-10 mr-3 py-2 text-white font-bold hover:bg-green-800 transition">أضافه</button>
<select name="unit" id="unit" class="w-[15%] text-center border border-gray-400 font-bold" >
    <option value="">-- الوحده --</option>
    @foreach ($units as $unit)
        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
    @endforeach
</select>

<select name="cat" id="cat" class="w-[15%] text-center border border-gray-400 font-bold" >
    <option value="">-- القسم --</option>
    @foreach ($cat as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>
            <input type="number" id="price" placeholder="السعر" class="w-[10%] text-center border border-gray-400 font-bold">
            <input type="number" id="quantity" placeholder="الكميه" class="w-[10%] text-center border border-gray-400 font-bold">
            <input type="text" id="itemName" placeholder="اسم المنتج" class="w-[30%] text-center border border-gray-400 font-bold">
        </div>
        <table>
            <thead>
                <tr>
                    <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">حذف</td>
                    <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">تعديل</td>
                    <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الاجمالي</td>
                    <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الوحده</td>
                    <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الكميه</td>
                    <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">السعر</td>
                    <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">القسم</td>
                    <td class="flex-3 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">اسم الصنف</td>
                    <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">م</td>
                </tr>
            </thead>
            <tbody id="itemsTable">
            </tbody>
            <tfoot>
                <tr>
                    <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold" colspan="2">50</td>
                    <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold" colspan="3">أجمالي الضريبه</td>
                    <td class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">200</td>
                    <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold" colspan="3">الاجمالي</td>
                </tr>
                <tr>
                    <td colspan="5" class="flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">250</td>
                    <td colspan="4" class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">أجمالي بعد الضريبه</td>
                </tr>
            </tfoot>
        </table>
        <hr class="border border-black mt-5">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400 mt-5">
            العميل
        </div>
        <table class="w-full">
            <thead>
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end">
                        <input type="text" name="supplier" class="w-[70%] border border-gray-400">
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">:المورد</td>
                </tr>
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end">
                        <input type="number" name="phone" class="w-[70%] border border-gray-400">
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">:رقم الهاتف</td>
                </tr>
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end">
                        <input type="date" name="purchase_date" class="w-[70%] text-center border border-gray-400">
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">:تأريخ الشراء</td>
                </tr>
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end">
                        <textarea name="description" class="w-[70%] text-center" cols="30" rows="5"></textarea>
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">:الموصفات</td>
                </tr>
                <tr>
                    <td colspan="2" class="bg-white flex justify-center my-2">
                        <button type="submit" class="bg-green-600 px-14 py-2 text-white font-bold hover:bg-green-800 transition">
                            حفظ وطباعه فاتوره
                        </button>
                    </td>
                </tr>
            </thead>
        </table>
    </form>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    const itemsTable = document.getElementById('itemsTable');
    const addItemButton = document.getElementById('addItem');
    let itemCounter = 1;

    addItemButton.addEventListener('click', function () {
        const itemName = document.getElementById('itemName').value;
        const quantity = document.getElementById('quantity').value;
        const price = document.getElementById('price').value;
        const unitId = document.getElementById('unit').value; 
        const categoryId = document.getElementById('cat').value; 
        const unit = document.getElementById('unit').options[document.getElementById('unit').selectedIndex].text;
        const category = document.getElementById('cat').options[document.getElementById('cat').selectedIndex].text;

        if (!itemName || !quantity || !price || !unitId || !categoryId) {
            alert('يرجى ملء جميع الحقول واختيار الوحدة والقسم');
            return;
        }

        const total = quantity * price;

        const newRow = `
            <tr data-unit-id="${unitId}" data-category-id="${categoryId}">
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">
                    <button type="button" onclick="deleteRow(this)" class="w-full">
                        <img src="{{ asset('img/delete.png') }}" width="22px" class="m-auto hover:scale-110 transition" alt="">
                    </button>
                </td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">
                    <button type="button" onclick="editRow(this)" class="w-full">
                        <img src="{{ asset('img/edit.png') }}" width="22px" class="m-auto hover:scale-110 transition" alt="">
                    </button>
                </td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${total}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${unit}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${quantity}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${price}</td>
                <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${category}</td>
                <td class="flex-3 text-right border border-gray-400 pr-2 py-1">${itemName}</td>
                <td class="flex-1 text-right border border-gray-400 pr-2 py-1">${itemCounter}</td>
            </tr>
        `;

        itemsTable.insertAdjacentHTML('beforeend', newRow);

        itemCounter++;

        document.getElementById('itemName').value = '';
        document.getElementById('quantity').value = '';
        document.getElementById('price').value = '';
        document.getElementById('unit').value = '';
        document.getElementById('cat').value = '';
    });

    document.getElementById('purchasesForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const items = [];
        const rows = itemsTable.querySelectorAll('tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            const unitId = row.getAttribute('data-unit-id'); 
            const categoryId = row.getAttribute('data-category-id'); 

            items.push({
                name: cells[7].textContent, 
                quantity: cells[4].textContent, 
                price: cells[5].textContent, 
                total: cells[2].textContent, 
                unit_id: parseInt(unitId), 
                category_id: parseInt(categoryId), 
            });
        });

        const formData = new FormData(this);
        formData.append('supplier', document.querySelector('input[name="supplier"]').value);
        formData.append('phone', document.querySelector('input[name="phone"]').value);
        formData.append('purchase_date', document.querySelector('input[name="purchase_date"]').value);
        formData.append('description', document.querySelector('textarea[name="description"]').value);
        formData.append('items', JSON.stringify(items));

        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = `/purchases/${data.purchase_id}/invoice`;
            } else {
                alert('حدث خطأ أثناء حفظ الفاتورة: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('حدث خطأ أثناء حفظ الفاتورة. الرجاء التحقق من السجلات.');
        });
    });
});

function deleteRow(button) {
    const row = button.closest('tr');
    row.remove();
}

function editRow(button) {
    const row = button.closest('tr');
    const cells = row.querySelectorAll('td');
    document.getElementById('itemName').value = cells[7].textContent;
    document.getElementById('quantity').value = cells[4].textContent;
    document.getElementById('price').value = cells[5].textContent;
    document.getElementById('unit').value = row.getAttribute('data-unit-id'); 
    document.getElementById('cat').value = row.getAttribute('data-category-id');
    row.remove();
}
    </script>
@endsection

{{-- <form id="Mainwindow" >
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
            <select class="text-center m-auto border border-gray-400 font-bold">
                <option value="">-- الحركه --</option>
                <option value="">مشترئ</option>
                <option value="">مرجع</option>
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
        const winUpdate = document.getElementById("Mainwindow");
        if (show === true) {
            winUpdate.style.display = "block";
        } else {
            winUpdate.style.display = "none";
        }

    }
</script> --}}
