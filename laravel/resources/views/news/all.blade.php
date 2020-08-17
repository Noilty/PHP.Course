@extends('layouts.main')

@section('title', 'Новость')

@section('content')
    <h1>Новости</h1>
    @forelse($news as $item)
        <div>
            <h2>{{ $item['title'] }}</h2>
            @if(!$item['isPrivate'])
                <a href="{{ route('news.one', $item['id']) }}">Подробнее</a>
            @endif
        </div>
    @empty
        <p>Нет новостей</p>
    @endforelse
@endsection
