@extends('layouts.app')

@section('title', 'Новость')

@section('content')
    <div class="container">
        <h1>Новости</h1>
        <div class="row justify-content-center">
            @forelse($news as $item)
                <div class="col-md-12 card">
                    <div class="card-body">
                        <h2>{{ $item->title }}</h2>
                        <div class="card-img"
                             style="background-image: url('{{ (!empty($item->image))? $item->image : asset('/images/photo.jpg') }}')"></div>
                        @if(!$item->isPrivate)
                            <a href="{{ route('news.one', $item->id) }}">Подробнее</a>
                        @endif
                    </div>
                </div>
            @empty
                <p>Нет новостей</p>
            @endforelse
        </div>
    </div>
@endsection
