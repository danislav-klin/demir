@extends('layouts.app')

@section('title', 'admin')

@section('content')

<h1 class="text-center">Админ вход</h1>



<form action="{{ route('enter.admin') }}" method="post">
    @csrf
    <label for="login">
        логин
        <input type="text" name="login" id="login">
    </label>
    <label for="password">
        пароль
        <input type="password" name="password" id="password">
    </label>
    <button class="btn btn-primary">войти</button>

</form>
<a href="{{ route('register.admin') }}">зарегаться</a>
@endsection