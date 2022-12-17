@extends('index')
@section('title', 'Регистрация')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6 mt-4">
                <h4>Регистрация</h4>
                @guest
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="InputName" class="form-label">Ваше имя:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="InputName" aria-describedby="InvalidName" value="{{old('name')}}">
                            @error('name')
                                <div class="invalid-feedback" id="InvalidName">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="InputSurname" class="form-label">Ваша фамилия:</label>
                            <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="InputSurname" aria-describedby="InvalidSurname" value="{{old('surname')}}">
                            @error('surname')
                            <div class="invalid-feedback" id="InvalidSurname">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="InputPatronymic" class="form-label">Ваше отчество:</label>
                            <input type="text" name="patronymic" class="form-control @error('patronymic') is-invalid @enderror" id="InputPatronymic" aria-describedby="InvalidPatronymic" value="{{old('patronymic')}}">
                            @error('patronymic')
                            <div class="invalid-feedback" id="InvalidPatronymic">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="InputLogin" class="form-label">Ваш логин:</label>
                            <input type="text" name="login" class="form-control @error('login') is-invalid @enderror" id="InputLogin" aria-describedby="InvalidLogin" value="{{old('login')}}">
                            @error('login')
                            <div class="invalid-feedback" id="InvalidLogin">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">Ваш email:</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="InputEmail" aria-describedby="InvalidEmail" value="{{old('email')}}">
                            @error('email')
                            <div class="invalid-feedback" id="InvalidEmail">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Ваш пароль:</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="InputPassword" aria-describedby="InvalidPassword">
                            @error('password')
                            <div class="invalid-feedback" id="InvalidPassword">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="InputPasswordConfirmation" class="form-label">Повтор пароля:</label>
                            <input type="password" name="password_confirmation" class="form-control" id="InputPasswordConfirmation">
                        </div>
                        <div class="mb-3 form-check">
                            <input checked type="checkbox" name="rules" class="form-check-input @error('password') is-invalid @enderror" id="Check"  aria-describedby="InvalidRules">
                            <label class="form-check-label" for="Check">Соглашение с правилами регистрации</label>
                            @error('rules')
                            <div class="invalid-feedback" id="InvalidRules">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                    </form>
                @endguest
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
