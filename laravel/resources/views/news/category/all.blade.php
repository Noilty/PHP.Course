@extends('layouts.app')

@section('title', 'Категории')

@section('content')
    <div class="container">
        <h1>Категории</h1>
        <div class="row justify-content-center">
            @forelse($categories as $category)
                <div class="col-md-12 card">
                    <div class="card-body">
                        <a href="{{ route('news.allCategory', $category['title_translit']) }}">{{ $category['title'] }}</a>
                    </div>
                </div>
            @empty
                <p>Нет категорий</p>
            @endforelse
        </div>
    </div>
@endsection
