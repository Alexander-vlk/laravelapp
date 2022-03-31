@extends('layouts.app')

@section('content')

<div class="home">
    <h1>Личный кабинет</h1>

    <p>В разработке</p>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Выйти</button>
    </form>
</div>
@endsection
