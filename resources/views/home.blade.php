@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <header>
                    <h1>Личный кабинет</h1>

                    <ul>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">
                                    Выйти
                                </button>
                            </form>
                        </li>
                    </ul>
                </header>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Вы вошли в свой личный кабинет</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
