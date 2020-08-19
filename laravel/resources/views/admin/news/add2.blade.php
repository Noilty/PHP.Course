@extends('layouts/admin/main')

@section('title', 'Админка//Добавить новость')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                        {{ Form::label('newsText', 'Категория новости') }}
                        {{ Form::textarea('newsText', '', ['class' => 'form-control', 'rows' => '5']) }}
                    </div>
                    <div class="form-check">
                        {{ Form::checkbox('newsPrivate', '1', false, ['class' => 'form-check-input', 'id' => 'newsPrivate']) }}
                        {{ Form::label('newsPrivate', 'Приватная новость?') }}
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary w-100" value="Добавить новость" id="newsAdd">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
