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
                    My Posts
                </div>
                <div class="w-full p-6">
                    <div class="text-gray-700">
                        @if ($articles->count() > 0)
                        @foreach ($articles as $article)
                            <div class="bg-gray-100 border-l-4 border-gray-500 text-gray-700 p-4 mb-6">
                                    <p class="pb-2 font-bold">
                                        {{$article->title}}
                                    </p>
                                    <p class="pb-2">
                                        {{$article->content}}
                                    </p>
                                    <p class="text-right">
                                        <b>Date :</b> {{$article->created_at}}
                                    </p>
                            </div>
                        @endforeach
                        @else
                            No <b>articles</b> yet !
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
