@extends('layouts.admin')

@section('title', 'Страница Добавить новость')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Добавить новость</h1>
                <form action="{{ route('admin.addNews') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="newsTitle">Название новости</label>
                        <input name="title" type="text" class="form-control" id="newsTitle" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="newsCategory">Категория новости</label>
                        <select name="category" class="form-control" id="newsCategory">
                            @forelse($categories as $item)
                                <option @if ($item['id'] == old('category')) selected @endif value="{{ $item['id'] }}">{{ $item['category'] }}</option>
                            @empty
                                <h4>Нет категорий</h4>
                            @endforelse
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="newsText">Текст новости</label>
                        <textarea name="text" id="newsText" rows="5" class="form-control">{{ old('text') }}</textarea>
                    </div>

                    <div class="form-check">
                        <input @if (old('isPrivate') == 1) checked @endif name="isPrivate" type="checkbox" value="1" class="form-check-input" id="newsPrivate">
                        <label for="newsPrivate" class="form-check-label">Новость private?</label>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary w-100" value="Add News" id="addNews">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
