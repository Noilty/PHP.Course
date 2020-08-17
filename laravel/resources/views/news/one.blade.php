@extends('layouts.main')

@section('title', 'Одна новость')

@section('content')
    <h1>Новости</h1>
    @if(!$news['isPrivate'])
        <h2>{{ $news['title'] }}</h2>
        <p>{{ $news['text'] }}</p>
    @else
        <p>Нет прав!</p>
    @endif
@endsection
