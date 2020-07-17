@extends('layouts.app')

@section('title', 'Страница Одна Категория')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Новости ({{ $category }})</h1>
                @forelse($news as $item)
                    <h4>{{ $item['title'] }}</h4>
                    <a href="{{ route('news.one', $item['id']) }}">Подробнее</a>
                    <hr>
                @empty
                    <p>Нет новостей</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
