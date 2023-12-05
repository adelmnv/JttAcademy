@extends('app')

@section('styles')
    <style>
        .container{
           min-height: 750px;
        }
    </style>
@endsection


@section('page_title', 'Login')

@section('content')
    <div class='container mx-auto bg-white'>
        <div class='w-1/5 mx-auto py-16'>
            <h1 class="text-lg text-rose-500">Login</h1>
            <form method='post' action="{{ route('posts.update', ['post_id'=>$post->id]) }}">
                @csrf
                <div class="flex flex-col mt-2">
                    <label>Title:</label>
                    <input type='text' name='title' value='{{ $post->title }}' class='rounded-md border py-2 px-4' />
                </div>
                <div class="flex flex-col mt-2">
                    <label>Категория:</label>
                    <select name='category_id' class='rounded-md border py-2 px-4' required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($post->category_id == $category->id) selected @endif>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col mt-2">
                    <label>Description:</label>
                    <textarea name='description' class='rounded-md border py-2 px-4'>{{ $post->description }}</textarea>
                </div>
                <div class="flex flex-col mt-2">
                    <label>Видим:</label>
                    <select name='is_visible' class='rounded-md border py-2 px-4'>
                        <option value='1' @if($post->is_visible) selected @endif>Да</option>
                        <option value='0' @if(!$post->is_visible) selected @endif>Нет</option>
                    </select>
                </div>
                <div class="flex flex-col mt-2">
                    <label>Views:</label>
                    <input type='number' name='views'  class='rounded-md border py-2 px-4' value="{{$post->views}}"/>
                </div>
                <div class="flex flex-col mt-2">
                    <label>Photo:</label>
                    <input name='main_photo_url' type="text" class='rounded-md border py-2 px-4' value="{{ $post->main_photo_url }}"/>
                </div>
                <div class="flex flex-col mt-2">
                    <label>Действие:</label>
                    <select name='action' class='rounded-md border py-2 px-4'>
                        <option value='save' selected>Сохранить</option>
                        <option value='delete'>Удалить</option>
                    </select>
                </div>
                <div class="mt-4">
                    <input type='submit' name='post_update' class='rounded-md border py-2 px-4' />
                </div>
            </form>
            <div  class="flex flex-col mt-2">
            <label>Теги:</label>
                @foreach($post->tags as $tag)
                    <div class="pr-4">{{$tag->title}}</div>
                    <form method="POST" action="{{ route('posts.detach_tag', ['post_id'=>$post->id]) }}">
                        @csrf
                        <input type="hidden" name="tag_id" value="{{ $tag->id }}" />
                        <input type="submit" value="X"/>
                    </form>
                @endforeach
            </div>
            <form action="{{route('posts.attach_tag',['post_id'=>$post->id])}}" method="post">
                @csrf
                <div class="flex flex-col mt-2">
                    <label>Добавить тег:</label>
                    <select name="tag_id" class='rounded-md border py-2 px-4'>
                        @foreach($tags as $tag){
                            <option value=" {{$tag->id}}">
                                {{$tag->title}}
                            </option>
                        }
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <input type='submit' name='attach_tag' class='rounded-md border py-2 px-4' />
                </div>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger mt-6 text-rose-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

@endif
        </div>
    </div>
@endsection