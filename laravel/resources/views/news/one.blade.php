@extends('layouts.main')

@section('title')
    Страница Одна Новость
@endsection

@section('content')
    <h1>{{ $news['title'] }}</h1>
    <p>{{ $news['text'] }}</p>
@endsection
