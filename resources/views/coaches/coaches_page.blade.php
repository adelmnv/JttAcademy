@extends('app')

@section('page_title', 'Тренера - ')



@section('content')
    <div class="container mx-auto bg-white flex-grow p-4">
        <h1 class="text-4xl font-bold text-center my-8">Наши Тренеры</h1>
        


        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($coaches as $coach)
                <div class="p-4 w-1/4 border">
                    <div>
                        <img src="{{ $coach->main_photo_url }}" class="w-full h-auto max-w-full aspect-rectangular">
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('coaches.view', ['coach_id' => $coach->id]) }}" class="text-lg font-semibold">{{ $coach->fio }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection