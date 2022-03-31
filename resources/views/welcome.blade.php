@extends('layouts.app')


@section('title')
    Добро пожаловать!
@endsection

@section('content')
    <div class="cont">
        <h1>Личный кабинет</h1>
        <section class='welcome'>
            <div class="login">
                <a class='welcome-link' href="{{ route('login') }}">Войти</a>
            </div>
            <div class="reg">
                <a class='welcome-link' href="{{ route('register') }}">Зарегистрироваться</a>
            </div>
        </section>
        
    </div>

@endsection