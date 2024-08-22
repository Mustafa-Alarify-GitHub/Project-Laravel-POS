@extends('layout')
@section('content')
    <div class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            تقرير 2014 الي 2022
        </div>



        <table>
            <thead>
                <th>
                    <tr>

                        <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            الموظف
                        </td>
                        <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            البيان
                        </td>
                        <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            المبلغ
                        </td>
                        <td class=" flex-7 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            الوقت
                        </td>
                        <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            التاريخ
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

                        <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">
                            محمد
                        </td>
                        <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">
                            فاتوره كهرباء
                        </td>
                        <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">
                            2500
                        </td>
                        <td class=" flex-7 text-right border border-gray-400 pr-2 py-1  font-bold">
                            22:50:30
                        </td>
                        <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">2024/2/10 </td>
                    </tr>
                </th>
            </tbody>
            <tfoot>
                <th>
                    <tr></tr>
                    <tr>
                        <td colspan="3"
                            class=" flex-7 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            2500
                        </td>
                        <td colspan="2"
                            class=" flex-1 text-right border border-gray-400 pr-2 py-1 text-green-700 font-bold">
                            الاجمالي
                        </td>
                    </tr>
                </th>
            </tfoot>
        </table>
    </div>
@endsection
