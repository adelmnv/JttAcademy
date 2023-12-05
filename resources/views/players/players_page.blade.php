@extends('app')

@section('page_title', 'Наши игроки - ')

@section('content')

    <div class="container mx-auto bg-white flex-grow p-4">
    <h1 class="text-4xl font-bold text-center my-8">Наши Игроки</h1>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($players as $player)
                <div class="p-4 w-1/4 border">
                    <div>
                        <img src="{{ $player->main_photo_url }}" class="w-full aspect-square">
                    </div>
                    <div class="mt-2">
                        <span class="text-lg font-semibold">{{ $player->fio }}</span>
                    </div>
                    <div class="text-gray-500 text-sm mt-1">
                        {!! nl2br(e($player->achievements)) !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection