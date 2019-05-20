@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-8/12">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
                    <div class="p-5 text-center mt-6">
                        <p class="font-bold font-serif font-bold text-2xl">
                            Join Medium.
                        </p>
                        <p class="pt-6 leading-normal">
                            Create an account to receive great stories in your inbox,<br/> 
                            personalize your homepage, and follow authors and<br/> 
                            topics that you love.
                        </p>
                    </div>
                    <form class="w-full p-6" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="flex flex-wrap mb-6">
                            <input id="name" type="text" class="shadow appearance-none border rounded w-1/3 mx-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('name') ? ' border-red-500' : '' }}" name="name" placeholder="Name"  value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <input id="email" type="email" class="shadow appearance-none border rounded w-1/3 mx-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <input id="password" type="password" class="shadow appearance-none border rounded w-1/3 mx-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('password') ? ' border-red-500' : '' }}" placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <input id="password-confirm" type="password" class="shadow appearance-none border rounded w-1/3 mx-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Confirm Password" name="password_confirmation" required>
                        </div>
                        <div class="flex flex-wrap">
                            <button type="submit" class="inline-block align-middle text-center select-none border w-1/3 mx-auto font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                                {{ __('Register') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-700 mt-8 mb-6">
                                Already have an account?
                                <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                                    Login
                                </a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
