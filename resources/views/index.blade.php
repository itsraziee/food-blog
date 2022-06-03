@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-athensGray text-5xl lowercase font-extrabold text-shadow-md pb-14 ">
                The older you get the more you eat
            </h1>
            <a href="/blog" class="rounded-1xl text-center bg-gray-50 text-coffeeBean hover:bg-whiskey py-2 px-4 font-bold text-xl lowercase ">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://media.istockphoto.com/photos/japanese-ramen-soup-with-chicken-egg-chives-and-sprout-picture-id511793034?k=20&m=511793034&s=612x612&w=0&h=RY5lLZ7l2y-6oXHtRBvGOyBS6REiQNdEGibjbgbBwo4=" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling about not having a good food?
        </h2>

        <p class="py-8 text-gray-500 text-s">
            We are here to help you!
            <br>
            Get different food ideas from different people.
        </p>

        <a href="/blog" class="lowercase text-athensGray bg-coffeeBean hover:bg-cioccolato  text-s font-extrabold py-2 px-4 rounded-1xl">
            Find Out More
        </a>
    </div>
</div>

<div class="text-center p-15 bg-coffeeBean text-white">
    <h2 class="uppercase text-gray-300 tracking-wide text-5xl lowercase font-extrabold text-shadow-md pb-9 py-5">
        Discover the food you love
    </h2>
</div>

<div class="text-center py-15">
    <h2 class="text-4xl font-bold py-10">
        About
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        FoodBlog is a website that provides a convenient way to create food ideas and recipes.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div>
        <img src="https://img.freepik.com/free-photo/pasta-spaghetti-with-shrimps-sauce_1220-5072.jpg?t=st=1653464850~exp=1653465450~hmac=6fc274d5eaac444b97b79dea5d45a2a33372e1114b63adf82705b68a07105eeb&w=996" alt="">
    </div>
    <div>
        <img src="https://atastystory.com/wp-content/uploads/2018/07/bucatini-homemade-pesto-halloumi-1.jpg" alt="" class="object-fit absolute h-full w-full">
    </div>
</div>

<div class="relative sm:grid grid-cols-2 w-4/5 m-auto">
    <div>
        <img src="https://img.freepik.com/free-photo/sliced-roast-t-bone-porterhouse-beef-meat-steak-steakhouse-menu-black-wooden-background-top-view_89816-30582.jpg" alt="" class="absolute h-full w-full">
    </div>
    <div>
        <img src="https://img.freepik.com/free-photo/hot-barbecue-chicken-wings-with-sauce-bbq-black-background-top-view_89816-22768.jpg?w=2000" alt="">
    </div>
</div>
@endsection