@extends('layouts.template')

@section('content')
    <div class="w-full flex justify-center mt-10">
        <div class="w-full max-w-lg h-auto p-5 md:p-8 rounded bg-gray-100 dark:bg-gray-900 shadow shadow-gray-300 dark:shadow-gray-800">
            <div class="flex gap-5">
                <h1 class="text-3xl font-bold mb-6 dark:text-indigo-500">Sign Up</h1>
            </div>
            <hr class="mb-8 dark:border-slate-700">
            <form method="POST" action="/register">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" name="name" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('name') is-invalid @enderror" placeholder="Input your name" value="{{ old('name') }}" required />
                    @error('name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" id="username" name="username" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('username') is-invalid @enderror" placeholder="Input your username" value="{{ old('username') }}" required />
                    @error('username')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Adress</label>
                    <input type="email" id="email" name="email" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('email') is-invalid @enderror" placeholder="Input your email" value="{{ old('email') }}" required />
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('password') is-invalid @enderror" placeholder="Input your password"required />
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
               <div class="mb-4">
                    <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-400 text-white p-2 rounded">Register</button>
                </div>

                <p class="text-center dark:text-gray-400">Already have an account? <a href="/login" class="text-indigo-500 underline">Sign In</a></p>
            </form>
        </div>
    </div>
@endsection