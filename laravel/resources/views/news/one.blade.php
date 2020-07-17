@extends('layouts.app')

@section('title', 'Страница Одна Новость')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>{{ $news['title'] }}</h1>
                <p>{{ $news['text'] }}</p>
            </div>
        </div>
    </div>
@endsection
