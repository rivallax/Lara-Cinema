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
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <a href="/" class="block py-2 px-3 text-gray-100 rounded md:bg-transparent {{ ($title === "Home") ? "bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent' }}" aria-current="page">List Movie</a>
          {{-- list movie --}}
        </li>
              <li>
                <a href="/history" class="block py-2 px-3 text-gray-100 rounded md:bg-transparent {{ ($title === "History") ? "bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent' }}" aria-current="page">History</a>
                {{-- history --}}
              </li>
              <li>
                <a href="#" class="py-2 px-3 text-gray-100 rounded md:bg-transparent {{ ($title === "Seat") ? "block bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent hidden' }}" aria-current="page">Seat</a>
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