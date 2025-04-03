@extends('layout')

@section('content')
    <form id="salesForm" class="w-[90%] flex justify-start flex-col bg-white mt-9" action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div class="w-full"></div>
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            ألمبيعات
        </div>
        <div class="w-full flex flex-row justify-end my-5">
            <button type="button" id="addItem" class="bg-green-600 px-10 mr-3 py-2 text-white font-bold hover:bg-green-800 transition">أضافه</button>
            <input type="number" id="quantity" class="border border-gray-500 text-center w-20" placeholder="الكميه">
            <select id="type" class="w-[10%] text-center border border-gray-400">
                <option value="بيع">بيع</option>
                <option value="ارجاع">ارجاع</option>
            </select>
            <select id="item_id" class="w-[40%] text-center border border-gray-400">
                <option value="">------------- أختر المنتج -------------</option>
                @foreach ($items as $item)
                    <option value="{{ $item->id }}" data-price="{{ $item->sales_price }}" data-category="{{ $item->category->name }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <table>
            <thead>
                <tr>
                    <td class="flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">الاجمالي</td>
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
                    <td colspan="6" class="text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                        <span id="totalAmount">0</span> 
                    </td>
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
                        <a href="" class="mr-4 hover:scale-110 transition"><img src="{{ asset('img/addb.png') }}" alt=""></a>
                        <select name="client_id" class="w-[70%] text-center border border-gray-400">
                            <option value="">------------- أختر العميل -------------</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">:العميل</td>
                </tr>
                <tr class="w-full flex justify-end items-center py-2">
                    <td class="w-4/5 flex justify-end">
                        <select name="payment_method" class="w-[70%] text-center border border-gray-400">
                            <option value="كاش">كاش</option>
                            <option value="بطاقة">بطاقة</option>
                        </select>
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: طرق الدفع</td>
                </tr>
                <tr class="w-full flex justify-end items-center py-2 border border-gray-400">
                    <td class="w-4/5 flex justify-end">
                        <textarea name="description" class="w-[70%] text-center border border-gray-400" cols="30" rows="5"></textarea>
                    </td>
                    <td class="w-1/5 flex justify-end mr-2 font-bold">: الموصفات </td>
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
            const totalAmount = document.getElementById('totalAmount');
            let itemCounter = 1;

            addItemButton.addEventListener('click', function () {
                const itemId = document.getElementById('item_id').value;
                const itemName = document.getElementById('item_id').options[document.getElementById('item_id').selectedIndex].text;
                const quantity = document.getElementById('quantity').value;
                const price = document.getElementById('item_id').options[document.getElementById('item_id').selectedIndex].getAttribute('data-price');
                const category = document.getElementById('item_id').options[document.getElementById('item_id').selectedIndex].getAttribute('data-category');
                const type = document.getElementById('type').value;

                if (!itemId || !quantity || !price) {
                    alert('يرجى ملء جميع الحقول');
                    return;
                }

                const total = quantity * price;

                const newRow = `
                    <tr>
                        <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${total}</td>
                        <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${quantity}</td>
                        <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${price}</td>
                        <td class="flex-2 text-right border border-gray-400 pr-2 py-1">${category}</td>
                        <td class="flex-3 text-right border border-gray-400 pr-2 py-1">${itemName}</td>
                        <td class="flex-1 text-right border border-gray-400 pr-2 py-1">${itemCounter}</td>
                    </tr>
                `;

                itemsTable.insertAdjacentHTML('beforeend', newRow);

                const currentTotal = parseFloat(totalAmount.textContent);
                totalAmount.textContent = currentTotal + total;

                itemCounter++;

                document.getElementById('quantity').value = '';
                document.getElementById('item_id').value = '';
            });

            document.getElementById('salesForm').addEventListener('submit', function (e) {
                e.preventDefault();

                const items = [];
                const rows = itemsTable.querySelectorAll('tr');

                rows.forEach(row => {
                    const cells = row.querySelectorAll('td');
                    items.push({
                        name: cells[4].textContent, 
                        quantity: cells[1].textContent, 
                        price: cells[2].textContent, 
                        total: cells[0].textContent, 
                        category: cells[3].textContent,
                    });
                });

                const formData = new FormData(this);
                formData.append('client_id', document.querySelector('select[name="client_id"]').value);
                formData.append('payment_method', document.querySelector('select[name="payment_method"]').value);
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
                        window.location.href = `/sales/${data.sale_id}/invoice`;
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
    </script>
@endsection