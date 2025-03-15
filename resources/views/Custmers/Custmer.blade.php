@extends('layout')
@section('content')
    <div class="w-[90%] flex justify-start flex-col bg-white mt-9">
        <div class="flex justify-center items-center h-14 text-xl bg-gray-100 font-bold text-sky-400">
            العملاء
        </div>

        <div class="flex flex-row justify-end items-center h-14 ">
            <a href="{{ route('Add_Custmers') }}" title='إضافة عميل جديد' type="submit"
                class="bg-orange-500 px-5 py-1 hover:scale-110 transition"><img src="{{ asset('img/add.png') }}" width="21px"
                    alt=""></a>
            {{-- Search --}}
            <form class=" flex justify-end ml-2">
                <button type="submit" class="bg-orange-500 px-5 py-1 hover:scale-110 transition"><img
                        src="{{ asset('img/search.png') }}" width="20px" alt=""></button>
                <input type='text' name='search' autocomplete='off' placeholder=' بحث العملاء'
                    class="border-2 border-gray-500 mr-2 w-[350px] text-center" />

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
                            الايميل </td>
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
                    @foreach ($data as $d)
                        <tr>
                            <td class=" flex-1 text-right border border-gray-400 pr-2 py-1  ">
                                <form action="{{ route('delete.Custmer', [$d->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="w-full">
                                        <img src="{{ asset('img/delete.png') }}" width="22px"
                                            class="m-auto hover:scale-110 transition" alt="">
                                    </button>
                                </form>
                            </td>

                            <td class="flex-1 text-right border border-gray-400 pr-2 py-1">
                                @if ($d && isset($d->id))
                                    <a href="{{ route('show.Custmer', [$d->id]) }}" class="block">
                                        <img src="{{ asset('img/edit.png') }}"
                                             width="22"
                                             class="m-auto hover:scale-110 transition-transform duration-200"
                                             alt="Edit">
                                    </a>
                                @else
                                    <span>لا يوجد بيانات</span> <!-- أو أي رسالة بديلة -->
                                @endif
                            </td>

                            <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">{{ $d->email }}
                            </td>

                            <td class=" flex-2 text-right border border-gray-400 pr-2 py-1 font-bold ">{{ $d->phone }}
                            </td>
                            <td class=" flex-7 text-right border border-gray-400 pr-2 py-1  font-bold"> {{ $d->name }}
                            </td>
                            <td class=" flex-1 text-right border border-gray-400 pr-2 py-1 ">1 </td>
                        </tr>
                    @endforeach
                </th>
            </tbody>

        </table>
    </div>
@endsection
