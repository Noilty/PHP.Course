@extends('layouts/admin/main')

@section('title', 'Админка//Добавить новость')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <label for="newsTitle">Название новости</label>
                        <input name="title" type="text" id="newsTitle" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="newsCategory">Категория новости</label>
                        <select class="form-control" id="newsCategory">
                            @forelse($categories as $item)
                                <option>{{ $item['title'] }}</option>
                            @empty
                            <h2>Нет категории</h2>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="newsText">Категория новости</label>
                        <textarea class="form-control" rows="5" id="newsText"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="1" id="newsPrivate">
                        <label for="newsPrivate">Приватная новость?</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary w-100" value="Добавить новость" id="newsAdd">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
