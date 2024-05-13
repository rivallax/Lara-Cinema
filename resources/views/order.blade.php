@extends('layouts.template')

@section('content')
    @if (session()->has('success'))
    <div id="alert-3" class="flex items-center max-w-xl mx-auto p-4 mb-4 text-green-500 rounded-lg bg-green-50 dark:bg-gray-500 dark:text-green-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
          {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-500 dark:text-green-400 dark:hover:bg-gray-400" data-dismiss-target="#alert-3" aria-span="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
      </div>
    @endif

    <div class="w-full max-w-xl mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-500 dark:border-gray-400">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
            <a href="#" class="text-sm font-medium text-indigo-600 hover:underline dark:text-indigo-500">
                Print
            </a>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-400">
                <li class="py-3 sm:py-4">
                    <div class="flex">
                        <span class="w-6/12">Movie</span>
                        <h1>{{ $purchases->movie }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12">Time</span>
                        <h1>{{ $purchases->time }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12">Seat</span>
                        <h1>{{ $purchases->seat }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12">Studio</span>
                        <h1>{{ $purchases->studio }}</h1>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex">
                        <span class="w-6/12">Ticket Price</span>
                        <h1>{{ $purchases->price }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12">Service Fees</span>
                        <h1>{{ $purchases->service_fees }}</h1>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex">
                        <span class="w-6/12 font-bold">Entire Pay</span>
                        <h1 class="font-bold">Rp. {{ $purchases->entire_pay }}</h1>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex">
                        <span class="w-6/12 font-bold">Amount Paid</span>
                        <h1 class="font-bold">Rp. {{ $purchases->amount_paid }}</h1>
                    </div>
                     <div class="flex">
                        <span class="w-6/12 font-bold">Change</span>
                        <h1 class="font-bold">Rp. {{ $purchases->change }}</h1>
                    </div>
                </li>
            </ul>
            <div class="flex mt-4">
                <a href="/print/{{ $purchase_id }}" class="text-white bg-indigo-400 hover:bg-indigo-500 focus:ring-4 focus:ring-indigo-300 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-400 focus:outline-none dark:focus:ring-indigo-500">Print Ticket</a>
                <a href="/history" class="font-semibold text-gray-90 focus:ring-4 focus:ring-indigo-300 hover:font-medium rounded text-sm px-5 py-2.5 me-2 mb-2">History</a>
            </div>
        </div>
    </div>

@endsection