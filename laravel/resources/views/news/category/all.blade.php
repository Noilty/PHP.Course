@extends('layouts.app')

@section('title', 'Страница Категорий')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Категории</h1>
                @forelse($category as $item)
                    <h4>{{ $item['category'] }}</h4>
                    <span>{{ $item['name'] }}</span>
                    <a href="{{ route('news.categoryOne', $item['name']) }}">Подробнее</a>
                    <hr>
                @empty
                    <p>Нет категорий</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
