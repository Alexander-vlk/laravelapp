@extends('layouts.app')

@section('content')

<div class="home">
    <h1>Личный кабинет</h1>

    <div class="userdata">
        <h2> {{ $user->surname }} </h2>
        <h2> {{ $user->name }} </h2>
        <h2> {{ $user->fatherland }} </h2>

        <p>{{ $user->email }}</p>

        <h3>Паспортные данные</h3>
        <p>{{ $user->passport_series }} {{ $user->passport_number }}</p>
        <p>{{ $user->issued_by }}</p>
        <p>{{ $user->home_address }}</p>
    </div>
    <div class="userbuttons">

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    </div>
    
</div>
@endsection
