@extends('layouts.main')

@section('title')
    Страница Одна Категория
@endsection

@section('content')
    <h1>Новости ({{ $category }})</h1>
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
