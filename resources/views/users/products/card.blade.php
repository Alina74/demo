@extends('index')
@section('title', 'Карточка товара')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <div class="card mt-3">
                    <div class="card-header"><b>{{$product->name}}</b></div>
                    <div class="card-body text-center">
                        <img src="{{'/public/storage/' . $product->photo}}" class="card-img-top w-50" alt="{{$product->name}}">
                        <p class="card-text">Стоимость: {{$product->price}} руб.</p>
                        <p class="card-text">Страна производителя: {{$product->country}}</p>
                        <p class="card-text">Вид товара: {{$product->category}}</p>
                        <p class="card-text">Цвет: {{$product->color}}</p>
                        <a href="#" class="btn btn-primary">Добавить в корзину</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    </div>
@endsection
