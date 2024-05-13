@extends('layouts.template')

@section('content')

<h1 class="text-3xl text-indigo-400 font-bold mt-5">History</h1>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Movie
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Time
                </th>
                <th scope="col" class="px-6 py-3">
                    Seat
                </th>
                <th scope="col" class="px-6 py-3">
                    Created By
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($history as $purchase)
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ $purchase->purchase->movie->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $purchase->purchase->date }}
                </td>
                <td class="px-6 py-4">
                    {{ $purchase->purchase->time }}
                </td>
                <td class="px-6 py-4">
                    {{ $purchase->seat }}
                </td>
                <td class="px-6 py-4">
                    {{ $purchase->purchase->created_by }}
                </td>
                <td class="flex items-center justify-between px-6 py-4">
                    <a href="print/{{ $purchase->purchase_id }}" class="block text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded text-sm px-4 py-2 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        Print Now
                    </a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                    <a href="history/delete/{{ $purchase->purchase_id }}" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
