@extends('layouts.auth')
@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-8/12">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
                    <div class="p-5 text-center mt-6">
                        <p class="font-bold font-serif font-bold text-2xl">
                            Welcome back.
                        </p>
                        <p class="pt-6 leading-normal">
                            Sign in to get personalized story<br/>
                            recommendations, follow authors and topics<br/>
                            you love, and interact with stories.
                        </p>
                    </div>
                    <form class="w-full p-6 " method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="flex flex-wrap mb-6">
                            @if ($errors->has('email'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                            <input id="email" type="email" class="shadow appearance-none w-1/3 mx-auto border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="flex flex-wrap mb-6">
                            @if ($errors->has('password'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                            <input id="password" type="password" class="shadow w-1/3 mx-auto appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('password') ? ' border-red-500' : '' }}" placeholder="Password" name="password" required>
                        </div>
                        <div class="flex flex-wrap items-center text-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 w-1/3 mx-auto text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <p class="w-full text-xs text-center mt-8">
                                    <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto" href="#">
                                        {{ __('Forgot Your Password ?') }}
                                    </a>
                                </p>
                            @endif
                            @if (Route::has('register'))
                                <p class="w-full text-xs text-center text-gray-700 mt-8 mb-6">
                                    Don't have an account?
                                    <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
                                        Create One
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
