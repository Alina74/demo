@extends('index')
@section('title', 'Контакты')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7 mt-4 mb-4">
                <h4>Где нас найти</h4>
                <img src="/public/assets/images/map.jpg" class="w-100" alt="">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Наш адрес</h5>
                        </div>
                        <small>г. Челябинск ул. Энтузиастов 17</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Наш номер телефона</h5>
                        </div>
                        <small class="text-muted">+7 800 555-35-35</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Наша электронная почта</h5>
                        </div>
                        <small class="text-muted">worldflowers@gmail.com</small>
                    </a>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
