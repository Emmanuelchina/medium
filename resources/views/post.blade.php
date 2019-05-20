@extends('layouts.app')
@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    <b>+</b> Add New Post
                </div>
                <form class="w-full p-6" method="POST" action="{{ route('store.post') }}" enctype="multipart/form-data">
                    @csrf
                    @include('includes.alerts')
                    <p class="text-gray-700">
                        <input id="title" type="text" class="shadow appearance-none w-full mx-auto border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('title') ? 'border-red-500' : '' }}" placeholder="Title" name="title" value="{{ old('title') }}" required autofocus>
                    </p>
                    <p class="mt-6">
                        <textarea rows="5" id="content" class="shadow appearance-none w-full mx-auto border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('content') ? 'border-red-500' : '' }}" placeholder="Content" name="content" required autofocus>{{ old('content') }}</textarea>
                    </p>
                    <p class="mt-6">
                        <input type="file" name="fileupload" />  <button type="submit" class="bg-blue-500 hover:bg-blue-700 float-right text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection