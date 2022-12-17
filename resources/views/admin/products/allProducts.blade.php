{{--Секция вывода всех товаров для админа--}}
@extends('index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-10">
                <h4>Все товары</h4>
                <a href="{{route('admin.products.create')}}" class="btn btn-primary w-25">Добавить товар</a>
                <div class="d-flex flex-row flex-wrap gap-3 pt-3">
                    @foreach($products as $product)
                    <div class="card" style="width: 16rem;">
                        <img src="/public/storage/{{$product->photo}}" height="200" class="card-img-top" alt="{{$product->name}}">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">Стоимость: {{$product->price}} р/шт.</p>
                            <a href="{{route('admin.products.show', ['product'=>$product->id])}}" class="btn btn-primary">Посмотреть</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
