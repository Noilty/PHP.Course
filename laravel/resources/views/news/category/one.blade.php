@extends('layouts.main')

@section('title', 'Категория')

@section('content')
    <h2>Новости категории {{ $category }}</h2>
    @forelse($news as $item)
        <div>
            @if(!$item['isPrivate'])
                <h2>{{ $item['title'] }}</h2>
                <p>{{ $item['text'] }}</p>
            @else
                <p>Нет прав!</p>
            @endif
        </div>
        <hr>
    @empty
        <p>Нет новостей в категории</p>
    @endforelse
@endsection
