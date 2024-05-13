@extends('layouts.template')

@section('content')
    <div class="grid grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-4">
        @foreach ($movies as $movie)
        
            <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                <img class="object-cover w-full rounded-t-lg md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('movies/' . $movie->image) }}" alt="">
                {{-- $movie->image memanggil movie image --}}
                <div class="flex flex-col p-8 leading-normal w-full">
                    <h1 class="mb-8 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $movie->name }}</h1>
                    {{-- $movie->name memanggil nama movie --}}
                    <h4 class="font-bold">{{ $movie->genre->name }}</h4>
                    {{-- $movie->genre->name memanggil genre movie --}}
                    <h4>{{ $movie->minutes }}</h4>
                    {{-- $movie->minutes memanggil minutes movie --}}
                    <h4>{{ $movie->studio_name }} <span>({{ $movie->studio_capacity }})</span></h4>
                    {{-- $movie->studio_name memanggil studio movie  || $movie->studio_capacity memanggil capasitas studio --}}
                    <h4>{{ $movie->director }}</h4>
                    <div class="flex justify-between mt-10 w-full">
                        <a href="/seat/10/{{ $movie->id }}" class="p-1 bg-gray-100 rounded shadow-md hover:bg-indigo-500 hover:text-gray-100">10.00</a>
                        <a href="/seat/13/{{ $movie->id }}" class="p-1 bg-gray-100 rounded shadow-md hover:bg-indigo-500 hover:text-gray-100">13.00</a>
                        <a href="/seat/16/{{ $movie->id }}" class="p-1 bg-gray-100 rounded shadow-md hover:bg-indigo-500 hover:text-gray-100">16.00</a>
                        <a href="/seat/19/{{ $movie->id }}" class="p-1 bg-gray-100 rounded shadow-md hover:bg-indigo-500 hover:text-gray-100">19.00</a>
                        {{-- waktu penayangan --}}
                    </div>
                </div>
            </div>    
            @endforeach
    </div>
@endsection