@extends('layouts/admin/main')

@section('title', 'Админка//Добавить новость')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form enctype="multipart/form-data"
                      action="@if (!$news->id) {{ route('admin.add.news') }} @else {{ route('admin.save.news', $news) }} @endif"
                      method="post">
                    @csrf
                    <div class="form-group">
                        <label for="newsTitle">Название новости</label>
                        @if ($errors->has('title'))
                            <div class="alert alert-danger" role="alert">
                                @foreach($errors->get('title') as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        <input name="title"
                               type="text"
                               id="newsTitle"
                               class="form-control"
                               value="{{ $news->title ?? old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="newsCategory">Категория новости</label>
                        @if ($errors->has('category_id'))
                            <div class="alert alert-danger" role="alert">
                                @foreach($errors->get('category_id') as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        <select name="category_id" class="form-control" id="newsCategory">
                            @forelse($categories as $item)
                                <option value="{{ $item['id'] }}"
                                        @if ($item['id'] == old('category')) selected @endif>{{ $item['category'] }}</option>
                            @empty
                            <h2>Нет категории</h2>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="newsText">Текст новости</label>
                        @if ($errors->has('text'))
                            <div class="alert alert-danger" role="alert">
                                @foreach($errors->get('text') as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        <textarea name="text"
                                  class="form-control"
                                  rows="5"
                                  id="newsText">{{ $news->text ?? old('text') }}</textarea>
                    </div>

                    <div class="form-group">
                        @if ($errors->has('image'))
                            <div class="alert alert-danger" role="alert">
                                @foreach($errors->get('image') as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        <input type="file" name="image">
                    </div>

                    <div class="form-check">
                        <input @if(old('idPrivate') == 1) checked @endif
                               name="idPrivate"
                               type="checkbox"
                               class="form-check-input"
                               value="1"
                               id="newsPrivate">
                        <label for="newsPrivate">Приватная новость?</label>
                    </div>
                    <div class="form-group">
                        <input type="submit"
                               class="btn btn-outline-primary w-100"
                               value="<? if ($news->id) { ?>Изменить новость<? } else { ?>Добавить новость<? } ?>"
                               id="newsAdd">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
