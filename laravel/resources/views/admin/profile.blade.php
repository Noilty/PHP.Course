@extends('layouts/admin/main')

@section('title', 'Админка')

@section('content')
    <div class="container">
        <h1>Профиль</h1>
        <form action="{{ route('admin.profile.update') }}" method="post">
            @csrf
            {{ Form::text('name', $user->name) }}<br>
            @if($errors->has('name'))
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->get('name') as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            {{ Form::text('email', $user->email) }}<br>
            @if($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->get('email') as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            {{ Form::text('password', '', ['placeholder' => 'Текущий пароль']) }}<br>
            @if($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->get('password') as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            {{ Form::text('newPassword', '', ['placeholder' => 'Новый пароль']) }}<br>
            @if($errors->has('newPassword'))
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->get('newPassword') as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            {{ Form::submit('Изменить', ['class' => 'btn btn-info']) }}<br>
        </form>
    </div>
@endsection
