@if ( session()->has('status') )
<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
    <p class="font-bold">Status !</p>
    <p>{{ session('status') }}</p>
</div>
@endif

@if ( session()->has('info') )
<div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-6" role="alert">
    <p class="font-bold">Quick Information !</p>
    <p>{{ session('info') }}</p>
</div>
@endif

@if ( $errors->any() )
<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mb-6" role="alert">
    <p class="font-bold">Something is wrong !</p>
    @foreach ($errors->all() as $error)
	<p>{{ $error }}</p>
	@endforeach
</div>
@endif

@if ( session()->has('error') )
<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
    <p class="font-bold">Holy Smoke !</p>
    <p>{{ session('error') }}</p>
</div>
@endif