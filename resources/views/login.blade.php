@extends('layouts.template')

@section('content')
    <div class="w-full flex justify-center mt-20">
        <div class="w-full max-w-lg h-auto p-5 md:p-8 rounded bg-gray-100 dark:bg-gray-900 shadow shadow-gray-300 dark:shadow-gray-800">
            <div class="flex gap-5">
                {{-- <div class="text-indigo-500">
                    <!-- Heroicon - Chip Outline -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18 11c0-.959-.68-1.761-1.581-1.954C16.779 8.445 17 7.75 17 7c0-2.206-1.794-4-4-4-1.516 0-2.822.857-3.5 2.104C8.822 3.857 7.516 3 6 3 3.794 3 2 4.794 2 7c0 .902.312 1.726.817 2.396A1.993 1.993 0 0 0 2 11v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-2.637l4 2v-7l-4 2V11zm-5-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zM6 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path>
                    </svg>
                </div> --}}
                <h1 class="text-3xl font-bold mb-6 dark:text-indigo-500">Sign In</h1>
            </div>
            <hr class="mb-8 dark:border-slate-700">

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

            @if (session()->has('loginError'))
            {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}

            </div> --}}
                <div id="alert-3" class="flex items-center max-w-xl mx-auto p-4 mb-4 text-red-500 rounded-lg bg-red-50 dark:bg-gray-500 dark:text-red-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="alert alert-danger alert-dismissible fade show ms-3 text-sm font-medium" role="alert">
                    {{ session('loginError') }}
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-500 dark:text-red-400 dark:hover:bg-gray-400" data-dismiss-target="#alert-3" aria-span="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            @endif

            <form method="POST" action="">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" id="username" name="username" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('username') is-invalid @enderror" placeholder="Input your username" value="{{ old('username') }}" required />
                    @error('username')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('password') is-invalid @enderror" placeholder="Input your password" required />
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-400 text-white p-2 rounded">Login</button>
                </div>
            </form>
            <label for="username" class=" text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Not registered? <a href="/register" target="_blank" rel="noopener noreferrer" class="text-indigo-600 hover:underline dark:text-indigo-500">register now!</a></label>
        </div>
    </div>
@endsection