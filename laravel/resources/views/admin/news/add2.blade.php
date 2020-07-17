@extends('layouts.admin')

@section('title', 'Страница Добавить новость')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Добавить новость v2 (LaravelCollective)</h1>
            <form>
                <div class="form-group">
                    {{ Form::label('newsTitle', 'Название новости') }}
                    {{ Form::text('title', 'Заголовок', ['class' => 'form-control', 'id' => 'newsTitle']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('newsCategory', 'Категория новости') }}
                    {{ Form::select('category', $categories, '1', ['class' => 'form-control', 'id' => 'newsCategory']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('newsText', 'Текст новости') }}
                    <textarea id="newsText" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-check">
                    <input type="checkbox" value="1" class="form-check-input" id="newsPrivate">
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
