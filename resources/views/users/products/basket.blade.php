@extends('index')
@section('title', 'Корзина')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7 mt-5">
                <h4>Корзина</h4>
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Сумма</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/public/assets/images/flower.jpg" class="card-img-top w-50" alt="..."></td>
                        <td>Магнолия</td>
                        <td>100</td>
                        <td><input type="number" value="1"></td>
                        <td>100</td>
                        <td><a href="#" class="btn btn-outline-danger">Удалить</a></td>
                    </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-outline-primary w-100">Оформить заказ</a>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
