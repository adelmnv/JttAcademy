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
            <form method='post' action="{{route('user.auth')}}">
                @csrf
                <div class="flex flex-col mt-2">
                    <label for="">Email:</label>
                    <input type="email" name="email" id="" class='rounded-md border py-2 px-4'>
                </div>
                <div class="flex flex-col mt-2">
                    <label for="">Password:</label>
                    <input type="password" name="password" id="" class='rounded-md border py-2 px-4'>
                </div>
                <div class="mt-4">
                    <input type="submit" name="login_btn" value='Отправить' class='rounded-md border py-2 px-4'>
                </div>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger mt-6 text-red">
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