{{--Секция для создания и редактирования товара для админа--}}
@extends('index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6 mt-5">
                @if(isset($product))
                    <h3>Редактирование {{$product->name}}</h3>
                    @if(session()->has('success'))
                        <div class="alert alert-success">Товар успешно отредактирован!</div>
                    @endif
                @else
                    <h3>Создание товара</h3>
                    @if(session()->has('success'))
                        <div class="alert alert-success">Товар успешно создан!</div>
                    @endif
                @endif
                <form method="post" action="{{(isset($product) ? route('admin.products.update',['product'=>$product->id]):route('admin.products.store'))}}" enctype="multipart/form-data">
                    @csrf
                    @isset($product)
                        <input  type="hidden" name="_method" value="put">
                    @endisset
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Наименование товара:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" aria-describedby="invalidInputName" value="{{old('name')}}">
                        @error('name')
                        <div id="invalidInputName" class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputCountry" class="form-label">Страна производителя:</label>
                        <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" id="inputCountry" aria-describedby="invalidInputCountry" value="{{old('country')}}">
                        @error('country')
                        <div id="invalidInputCountry" class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputCategory" class="form-label">Вид товара:</label>
                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="inputCategory" aria-describedby="invalidInputCategory" value="{{old('category')}}">
                        @error('category')
                        <div id="invalidCategory" class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputColor" class="form-label">Цвет:</label>
                        <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" id="inputColor" aria-describedby="invalidInputColor" value="{{old('color')}}">
                        @error('color')
                        <div id="invalidInputColor" class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPrice" class="form-label">Стоимость товара:</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="inputPrice" placeholder="Пример: 198" aria-describedby="invalidInputPrice" value="{{old('price')}}">
                        @error('price')
                        <div id="invalidInputPrice" class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputFile" class="form-label">Выберите изображения для товара:</label>
                        <input name="photo_file" class="form-control @error('photo_file') is-invalid @enderror" type="file" id="inputFile" aria-describedby="invalidInputFile">
                        @error('photo_file')
                        <div id="invalidInputFile" class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <label for="inputSelect" class="input-group-text">Наличие:</label>
                        <select name="availability" id="inputSelect" class="form-select @error('availability') is-invalid @enderror" aria-describedby="invalidInputAvailability">
                            <option >Выберите...</option>
                            <option @if(old('availability')=='В наличии')selected @endif  value="В наличии">В наличии</option>
                            <option @if(old('availability')=='Нет в наличии')selected @endif value="Нет в наличии">Нет в наличии</option>
                        </select>
                        @error('availability')
                        <div id="invalidInputAvailability" class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        @if(isset($product))
                            Отредактировать товар
                        @else
                            Создать новый товар
                        @endif
                    </button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
