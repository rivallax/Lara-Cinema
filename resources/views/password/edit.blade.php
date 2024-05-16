@extends('layouts.template')


@section('content')
<div class="w-full flex justify-center mt-10">
    <div class="w-full max-w-lg h-auto p-5 md:p-8 rounded bg-gray-100 dark:bg-gray-900 shadow shadow-gray-300 dark:shadow-gray-800">
        <div class="flex gap-5">
            <h1 class="text-3xl font-bold mb-6 dark:text-indigo-500">Change Your Password</h1>
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
            @if (session()->has('error'))
                <div id="alert-3" class="flex items-center max-w-xl mx-auto p-4 mb-4 text-red-500 rounded-lg bg-red-50 dark:bg-gray-500 dark:text-red-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                    {{ session('error') }}
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-500 dark:text-red-400 dark:hover:bg-gray-400" data-dismiss-target="#alert-3" aria-span="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            @endif
        <form method="POST" action="{{ route('update-password') }}">
            @csrf
            <div class="mb-4">
                <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                <input type="password" id="current_password" name="current_password" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('name') is-invalid @enderror" placeholder="Current Password" required />
                @error('current_password')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                @enderror
            </div>
          
            <div class="mb-4">
                <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                <input type="password" id="new_password" name="new_password" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('password') is-invalid @enderror" placeholder="New Password" required />
                @error('new_password')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="new_password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('password') is-invalid @enderror" placeholder="rewrite password "required />
            </div>
           <div class="mb-4">
                <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-400 text-white p-2 rounded">Update</button>
            </div>

            <p class="text-center dark:text-gray-400">Already have an account? <a href="/login" class="text-indigo-500 underline">Sign In</a></p>
        </form>
    </div>
</div>
@endsection