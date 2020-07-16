@extends('layouts.main')

@section('title')
    Страница Категорий
@endsection

@section('content')
    <h1>Категории</h1>
    @forelse($category as $item)
        <div>
            <h4>{{ $item['category'] }}</h4>
            <span>{{ $item['name'] }}</span>
            <a href="{{ route('news.categoryOne', $item['name']) }}">Подробнее</a>
            <hr>
        </div>
    @empty
        <p>Нет категорий</p>
    @endforelse
@endsection
