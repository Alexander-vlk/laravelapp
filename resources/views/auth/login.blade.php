@extends('layouts.app')

@section('content')
<div class="cont">
    <h1>Вход</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="email">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Ваш e-mail') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
           </div>

            <div class="pwd">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

            <div class="check">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                    {{ __('Запомнить устройство') }}
                            </label>
                            </div>
                        </div>
            </div>

            <div class="login-cont">
                <div class="login-btn-link">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Войти') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="pwd-reset" href="{{ route('password.request') }}">
                            {{ __('Забыли пароль?') }}
                        </a>
                    @endif
                </div>
            </div>
    </form>
</div>
@endsection
