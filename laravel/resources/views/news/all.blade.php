@extends('layouts.main')

@section('title')
    Страница новости
@endsection

@section('content')
    <h1>Новости</h1>
    @forelse($news as $item)
        <div>
            <h4>{{ $item['title'] }}</h4>
            <a href="{{ route('news.one', $item['id']) }}">Подробнее</a>
            <hr>
        </div>
    @empty
        <p>Нет новостей</p>
    @endforelse
@endsection
