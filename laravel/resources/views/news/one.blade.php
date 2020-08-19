@extends('layouts.app')

@section('title', 'Одна новость')

@section('content')
    <div class="container">
        <h1>Новости</h1>
        <div class="row justify-content-center">
            @if(!$news['isPrivate'])
                <div class="col-md-12 card">
                    <div class="card-body">
                        <h2>{{ $news['title'] }}</h2>
                        <p>{{ $news['text'] }}</p>
                    </div>
                </div>
            @else
                <p>Нет прав!</p>
            @endif
        </div>
    </div>
@endsection
