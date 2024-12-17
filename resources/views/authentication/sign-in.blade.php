@php
    $setting = app(\App\Services\Setting\SettingService::class)->getSetting();
@endphp

@extends('layouts.default.baseof')
@section('main')
    <div class="flex flex-col items-center justify-center px-6 pt-6 mx-auto h-screen dark:bg-gray-900">
        <div class="w-full max-w-xl p-6 space-y-5 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
            <a href="{{ url('/') }}"
                class="flex items-center justify-center mb-8 text-3xl font-bold lg:mb-10 uppercase dark:text-white">
                <img src="{{ $setApp['app_logo'] }}" alt="Application Logo" class="w-10 mr-4 h-11 text-blue-500"> 
                <span class="text-blue-500">{{ $setApp['app_title'] }}</span>
            </a>
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="example@company.com" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="*******"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
                    </div>
                    <a href="#" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">Lost
                        Password?
                    </a>
                </div>
                <div class="flex flex-col items-center justify-center gap-4">
                    <button type="submit"
                        class="w-full px-10 py-2 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Login
                    </button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Not registered?
                        <a href="{{ route('auth.register') }}"
                            class="text-primary-700 hover:underline dark:text-primary-500 hover:cursor-pointer">
                            Create account
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
