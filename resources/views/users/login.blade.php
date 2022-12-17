@extends('index')
@section('title', 'Авторизация')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6 mt-4">
                <h4>Авторизация</h4>
                @auth
                    <div class="alert alert-success">Вы успешно авторизовались!</div>
                @endauth
                @guest
                    @if(!session()->has('success'))
                        @error('auth')
                            <div class="alert alert-danger">Логин или пароль не верные!</div>
                        @enderror
                        @if(session()->has('register'))
                        <div class="alert alert-success">Вы успешно зарегистрировались, авторизуйтесь!</div>
                        @endif
                    @endif
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="InputLogin" class="form-label">Ваш логин:</label>
                            <input type="text" name="login" class="form-control @error('login') is-invalid @enderror" id="InputLogin" aria-describedby="InvalidLogin" value="{{old('login')}}">
                            @error('login')
                            <div class="invalid-feedback" id="InvalidLogin">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Ваш пароль:</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="InputPassword" aria-describedby="InvalidPassword">
                            @error('password')
                            <div class="invalid-feedback" id="InvalidPassword">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Авторизоваться</button>
                    </form>
                @endguest
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
