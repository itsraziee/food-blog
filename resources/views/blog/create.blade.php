@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15 ">
        <h1 class="font-bold text-center text-4xl ">
            Create Post
        </h1>
    </div>
</div>

@if ($errors->any())
<div class="w-4/5 m-auto">
    <ul>
        @foreach ($errors->all() as $error)
        <li class="w-5/6 mb-4 text-gray-50 bg-red-700 rounded-1xl py-3 p-6">
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-full h-20 text-4xl outline-none">

        <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

        <div class="bg-grey-lighter pt-15">
            <label class="mt-15 lowercase text-athensGray bg-coffeeBean hover:bg-cioccolato text-sm font-bold py-2 px-4 rounded-1xl">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>

        <button type="submit" class="mt-15 lowercase text-athensGray bg-coffeeBean hover:bg-cioccolato text-sm font-bold py-2 px-4 rounded-1xl">
            Submit Post
        </button>
    </form>
</div>

@endsection