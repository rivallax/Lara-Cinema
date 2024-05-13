<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ $title }} || Lara Cinema</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>
    <div class="container p-4 mx-auto">
        <div class="grid gap-6 lg:grid-cols-3 md:grid-cols-2 mt-4">
            @foreach ($seats as $seat)
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{ asset('public/logo_cinema.png') }}" alt="Flowbite Logo" />
                    <h5 class="mb-2 mt-4 text-lg h-8 font-semibold tracking-tight text-gray-900 dark:text-white">{{ $tickets->purchase->movie->name }}</h5>
                    <div class="flex">
                        <span class="w-1/5">Date</span>
                        <h1>: {{ $tickets->purchase->date }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-1/5">Seat</span>
                        <h1>: {{ $seat }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-1/5">Studio</span>
                        <h1>: {{ $tickets->purchase->movie->studio_name }}</h1>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="w-full mt-10">
            <button class="w-full text-white font-semibold bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800" type="button" onclick="window.print()">
                Print Now
            </button>
        </div>

    <script>
    </script>
    
</body>
</html>