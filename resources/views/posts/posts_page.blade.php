@extends('app')

@section('page_title', 'Новости - ')

@section('styles')
<style>
    /* h1{
        color:red;
    } */

    .welcome_header{
        padding:20px;
    }

    //tailwind method
    //именование классов исходя как этот элемент должен выглядить
    .text-lg{
        font-size: 42px;
    }

    .text-black{
        color: black;
    }

</style>
@endsection


@section('content')
<!-- <div class="container mx-auto bg-white">
        <h1 class="text-lg text-rose-500">Welcome User</h1>
        {{auth()->user()}}
        
        @auth
            {{auth()->user()->email}}
            <a href="{{route ('user.logout') }}">Logout</a>
        @endauth
        @guest
            <a href="{{route ('user.login') }}">Login</a>
        @endguest

        <div class = "flex flex-wrap">
            @foreach($categories as $category)
                <div class="rounded-full py-2 px-6 border text-sm">
                    {{$category->title}}
                    <b>{{$category->posts()->count()}}</b>
                </div>
            @endforeach
        </div>

        
        <div class = "flex flex-wrap">
            @foreach($posts as $post)
                <div  class = "p-4 border w-1/5">
                    <div  class = "">
                        <img src="{{$post->main_photo_url}}" class = "w-full aspect-square">
                    </div>
                    <div>{{$post->title}}</div>
                    <div>{{$post->description}}</div>
                    <div>{{$post->updated_at}}</div>
                </div>
            @endforeach
        </div>


        <div class="">
            @foreach ($categories as $category)
            <div class="py-4 text-lg font-semibold">{{ $category->title }}</div>
            <div class="flex flex-wrap">
                @foreach ($category->posts as $post)
                    <div class="p-4 border w-1/5">
                        <div>
                            <img src="{{ $post->main_photo_url }}" class="w-full aspect-square"/>
                        </div>
                        <div>{{ $post->title }}</div>
                        <div>{{ $post->description }}</div>
                        <div>{{ $post->updated_at }}</div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div> -->
    <div class="container mx-auto bg-white flex-grow p-4">
        <!-- <h1 class="text-lg text-rose-500">Welcome User</h1>
        {{ auth()->user() }}
        
        @auth
            {{ auth()->user()->email }}
            <a href="{{ route('user.logout') }}">Logout</a>
        @endauth
        @guest
            <a href="{{ route('user.login') }}">Login</a>
        @endguest -->

        <div class="flex flex-wrap items-center">
            @foreach ($categories as $category)
                <a href="{{route ('posts.by_category', ['category_id'=>$category->id]) }}" class="rounded-full py-2 px-6 border text-sm transition-all duration-300 hover:bg-green-500 hover:text-white mr-4 mb-4 inline-flex items-center bg-white text-black">
                    {{ $category->title }}
                    <span class="ml-2">{{ $category->posts()->count() }}</span>
                </a>
            @endforeach
        </div>


        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($posts as $post)
                <div class="p-4 w-1/4 border">
                    <div>
                        <img src="{{ $post->main_photo_url }}" class="w-full aspect-square">
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('posts.view', ['post_id' => $post->id]) }}" class="text-lg font-semibold">{{ $post->title }}</a>
                    </div>
                    <div class="text-gray-500 text-sm mt-1">
                        {{ $post->updated_at->format('d.m.Y') }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection