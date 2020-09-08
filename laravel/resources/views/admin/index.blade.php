@extends('layouts/admin/main')

@section('title', 'Админка')

@section('content')
    <div class="container">
        <h1>Новости</h1>
        <div class="row justify-content-center">
            @forelse($news as $item)
                <div class="col-md-12 card">
                    <div class="card-body">
                        <h2>{{ $item->title }}</h2>
                        <form action="{{ route('admin.news.destroy', $item) }}"
                              method="post">
                            <a href="{{ route('admin.update.news', $item) }}">
                                <button type="button"
                                        class="btn btn-secondary">Edit</button>
                            </a>
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                    class="btn btn-danger">delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p>Нет новостей</p>
            @endforelse
        </div>
        {{ $news->links() }}
    </div>
@endsection
