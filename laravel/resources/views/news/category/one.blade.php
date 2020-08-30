@extends('layouts.app')

@section('title', 'Категория ' . $category)

@section('content')
    <div class="container">
        <h1>Новости категории {{ $category }}</h1>
        <div class="row justify-content-center">
            @forelse($news as $item)
                <div class="col-md-12 card">
                    <div class="card-body">
                        <h2>{{ $item['title'] }}</h2>
                        @if(!$item['isPrivate'])
                            <a href="{{ route('news.one', $item['id']) }}">Подробнее</a>
                        @endif
                    </div>
                </div>
            @empty
                <p>Нет новостей в категории</p>
            @endforelse
            {{ $news->links() }}
        </div>
    </div>
@endsection
