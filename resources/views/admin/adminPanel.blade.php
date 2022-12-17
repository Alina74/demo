@extends('index')
@section('title', 'Панель администратора')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6 d-flex flex-column gap-3">
                <h4>Панель администратора</h4>
                    <a href="{{route('admin.products.index')}}" class="btn btn-primary">Управление товарами</a>
                    <a href="#" class="btn btn-primary">Управление категориями</a>
                    <a href="#" class="btn btn-primary">Управление заказами</a>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
