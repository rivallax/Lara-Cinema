<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
   




    <title>{{ $title }} || Lara Cinema</title>
</head>
<body>
  <nav class="bg-white border-gray-300 dark:bg-gray-900 sticky top-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a>
          <img src="{{ asset('public/logo_cinema.png') }}" class="h-12" alt="Flowbite Logo" />
          {{-- logo cinema --}}
      </a>
    </a>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-5 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <a href="/" class="block py-12 px-6 text-gray-100 rounded md:bg-transparent {{ ($title === "Home") ? "bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent' }}" aria-current="page">List Movie</a>
          {{-- list movie --}}
        </li>
              <li>
                <a href="/history" class="block text-uppercase py-12 px-6 text-gray-100 rounded md:bg-transparent {{ ($title === "History") ? "bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent' }}" aria-current="page">History</a>
                {{-- history --}}
              </li>
              <li>
                <a href="#" class="py-12 px-6 text-gray-100 rounded md:bg-transparent {{ ($title === "Seat") ? "block bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent hidden' }}" aria-current="page">Seat</a>
                {{-- seat --}}
              </li>
              <li>
                <a href="/order" class="py-2 px-3 text-gray-100 rounded md:bg-transparent {{ ($title === "order") ? "block bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent hidden' }}" aria-current="page">Order</a>
                {{-- order --}}
              </li>
              <li>
                <a href="/print" class="py-2 px-3 text-gray-100 rounded md:bg-transparent {{ ($title === "Print") ? "block bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent hidden' }}" aria-current="page">Print</a>
                {{-- Print --}}
              </li>
            </ul>
        
          
          
          {{-- register --}}
       <ul class="navbar-nav ms-auto">
            @auth
          
          <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">{{ auth()->user()->username }}
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
           </button>
  
  <!-- Dropdown menu -->
  <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
      <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div>{{ auth()->user()->name }}</div>
        <div class="font-height truncate">{{ auth()->user()->email }}</div>
      </div>
        <div>
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
            <li>
              <a href="/edit" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UBAH PASSWORD</a>
            </li>
            <li>
              <a href="/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LOG OUT</a>
            </li>
          </ul>    
      </div>
  </div>
    <div>
      <ul>
            @else
            <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class=" gap-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                <svg class="w-5 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                </svg>
                
                <li class="nav-item">
                    <a href="/logout" class="nav-link active" aria-current="page">Home</a>
                </li>
            </button>
            @endauth
      </ul>
          
    </div>
  </div>
</nav>
    <main>
          <div class="container mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            @yield('content')
          </div>
    </main>
  </body>
  </html>