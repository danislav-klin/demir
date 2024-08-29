@extends('layouts.app')

@section('title', 'register')

@section('content')

    <h1 class="text-center">Регистрация</h1>


    <form action="{{ route('create') }}" method="post" class="container form-width">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @csrf
        <div class="form-floating mb-3 mt-4">
            <input name="name_person" type="text" class="form-control" id="floatingInput" placeholder="fio">
            <label for="floatingInput">ФИО</label>
        </div>
        <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input name="phone" type="tel" class="form-control" id="floatingInput" placeholder="tel">
            <label for="floatingInput">Телефон</label>
        </div>
        <div class="form-floating mb-3">
            <input name="pasport" type="text" class="form-control" id="floatingInput" placeholder="number">
            <label for="floatingInput">Серия и номер паспорта</label>
        </div>
        <div class="form-floating mb-3">
            <input name="login" type="text" class="form-control" id="floatingInput" placeholder="login">
            <label for="floatingInput">login</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="text-center m-5">
            <button type="submit" class="btn btn-primary ">зарегистрироваться</button>
        </div>


    </form>


@endsection
