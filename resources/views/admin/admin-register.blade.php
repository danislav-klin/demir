@extends('layouts.app')

@section('title', 'admin')

@section('content')

<h1>Админ регистрация</h1>

<form action="{{ route('create.admin') }}" method="post">
    @csrf
    <label for="name">
        ФИО
        <input type="text" name="name" id="name">
    </label>
    <label for="job">
        Должность
        <input type="text" name="job" id="job">
    </label>
    <label for="login">
        логин
        <input type="text" name="login" id="login">
    </label>
    <label for="password">
        пароль
        <input type="password" name="password" id="password">
    </label>
    <button class="btn btn-primary">зарегаться</button>

</form>


@endsection