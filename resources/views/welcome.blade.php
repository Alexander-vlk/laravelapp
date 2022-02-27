@extends('layouts.app')


@section('title')
    Checking
@endsection

@section('content')

    <a href="{{ route('register') }}">Зарегестрироваться</a>


    <a href="{{ route('login') }}">Войти</a>
@endsection