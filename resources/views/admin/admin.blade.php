@extends('layouts.app')

@section('title', 'admin-panel')

@section('content')

<div class="container">
    
    @foreach ($rentals as $rental)
    <div class="border border-black p-4 mt-5 mb-5">
        @foreach ($users as $user)
            @if ($user->id == $rental->user_id)
                <p>Имя пользвателя: {{ $user->name }}</p>
                <p>Email пользователя: {{ $user->email }}</p>
                <p>телефон: {{ $user->telephon }}</p>
                <p>серия и номер паспорта: {{ $user->pasport }}</p>
                
            @endif
        @endforeach
        <p>авто: {{ $rental->brand_name }}</p>
        <p>пробег: {{ $rental->run }}</p>
        <p>цена за сутки: {{ $rental->price }}</p>
        <p>время проката в днях: {{ $rental->days }}</p>
        <p>итоговая цена: {{ $rental->total_price }}</p>

        <form action="{{ route('rental.update') }}" method="post">
            @csrf
            @method('put')
            <select name="select_input" class="form-select" aria-label="Default select example">
                <option selected>Одобрите ли вы прокат?</option>
                <option value="Отказ">Отказ</option>
                <option value="Отобрен">Одобрен</option>
            </select>

            <button class="btn btn-primary">save</button>
        </form>

    </div>

    
    @endforeach
</div>



@endsection