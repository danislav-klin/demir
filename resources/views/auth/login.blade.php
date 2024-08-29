@extends('layouts.app')

@section('title', 'login')

@section('content')

<h1 class="text-center">Авторизация</h1>

@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<form action="{{ route('login.enter') }}" method="post" class="container form-width">
    @csrf
    <div class="form-floating mb-3">
        <input name="login" type="text" class="form-control" id="login" placeholder="login">
        <label for="login">login</label>
    </div>
    <div class="form-floating">
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Пароль</label>
    </div>

    <div class="text-center m-5">
        <button type="submit" class="btn btn-primary ">авторизоваться</button>
    </div>


</form>

<a href="{{ route('login.admin')}}">зайти как админ</a>
@endsection
