@extends('layouts.app')

@section('title', 'user')

@section('content')

<h1 class="text-center mt-3 mb-3">Заявка</h1>

<div class="container">
    <div class="border border-black p-4 mt-5 mb-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('addRental', auth()->user()) }}" method="post">
            @csrf
            <label for="brand_name" class="m-4">
                марка авто
                <input type="text" id="brand_name" name="brand_name" value="{{ $auto->brand_name }}" disabled>
                <input type="hidden" id="brand_name" name="brand_name" value="{{ $auto->brand_name }}">
            </label>
            <label for="run_auto" class="m-4">
                пробег
                <input type="integer" id="run_auto" name="run_auto" value="{{ $auto->run }}" disabled>
                <input type="hidden" id="run_auto" name="run_auto" value="{{ $auto->run }}">
            </label>
            <label for="price_auto" class="m-4">
                цена за сутки
                <input type="integer" id="price_auto" name="price_auto" value="{{ $auto->price }}" disabled>
                <input type="hidden" id="price_auto" name="price_auto" value="{{ $auto->price }}">
            </label>
            <label for="days" class="m-4">
                за сколько дней возьмете на прокат?
                <input name="days" id="days" type="number" min="1" max="30" step="1">
            </label>
            <label for="total_price" class="m-4">
                итоговая цена:
                <input type="integer" name="total_price" id="total_price">
            </label>
            
            
            <button class="btn btn-success">отправить</button>
        </form>


    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const priceAutoInput = document.getElementById('price_auto');
        const daysInput = document.getElementById('days');
        const totalPriceInput = document.getElementById('total_price');

        daysInput.addEventListener('input', function() {
            const priceAuto = parseInt(priceAutoInput.value);
            const days = parseInt(daysInput.value);

            if (!isNaN(priceAuto) && !isNaN(days)) {
                const totalPrice = priceAuto * days;
                totalPriceInput.value = totalPrice;
            }
        });
    });
</script>

@endsection