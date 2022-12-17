@extends('index')
@section('title', 'Мои заказы')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7 mt-4 mb-4">
                <h4>Мои заказы</h4>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button d-flex gap-4" type="button" data-bs-toggle="collapse" data-bs-target="#order_1" aria-expanded="true" aria-controls="panelsStayOpen-headingOne">
                                    <i>Номер заказа: 1</i>
                                    <b class="bg-success text-white ml-1 p-1 rounded-2">Статус: Новый</b>
                                </button>
                            </h5>
                            <div id="order_1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Название товара</th>
                                            <th scope="col">Стоимость товара</th>
                                            <th scope="col">Количество</th>
                                            <th scope="col">Общая сумма</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Товар</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        <tr>
                                            <th colspan="5"></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="list-group">
                                        <li class="list-group-item">Номер заказа:</li>
                                        <li class="list-group-item">Статус заказа:</li>
                                        <li class="list-group-item">Дата заказа:</li>
                                        <li class="list-group-item">Дата изменения:</li>
                                    </ul>
                                </div><a href="#" class="btn btn-outline-danger w-100">Удалить заказ</a>
                            </div>

                        </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
