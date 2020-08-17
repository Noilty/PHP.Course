@extends('layouts.main')

@section('title', 'Категории')

@section('content')
    <h1>Категории</h1>
    @forelse($categories as $category)
        <div>
            <a href="{{ route('news.allCategory', $category['id']) }}">{{ $category['title'] }}</a>
        </div>
    @empty
        <p>Нет категорий</p>
    @endforelse
@endsection
