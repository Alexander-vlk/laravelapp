@extends('layouts.app')

@section('content')
<div class="cont">
    <h1>{{ __('Регистрация') }}</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

                <div class="col-md-6">
                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                    @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="fatherland" class="col-md-4 col-form-label text-md-end">{{ __('Отчечтво') }}</label>

                <div class="col-md-6">
                    <input id="fatherland" type="text" class="form-control @error('fatherland') is-invalid @enderror" name="fatherland" value="{{ old('fatherland') }}" value='Нет'  autocomplete="fatherland" autofocus>

                    @error('fatherland')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="passport">

                
                     <div class="series">
                        <label for="passport_series" class="col-md-4 col-form-label text-md-end">{{ __('Серия паспорта') }}</label>
                        <input id="passport_series" type="text" class="form-control @error('passport_series') is-invalid @enderror" name="passport_series" value="{{ old('passport_series') }}" required autocomplete="passport_series" autofocus>
                        
                        @error('passport_series')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            
                    
                <div class="number">
                    <label for="passport_number" class="col-md-4 col-form-label text-md-end">{{ __('Номер паспорта') }}</label>
                    <input id="passport_number" type="text" class="form-control @error('passport_number') is-invalid @enderror" name="passport_number" value="{{ old('passport_number') }}" required autocomplete="passport_number" autofocus>
                    
                    @error('passport_number')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            
                
                <div class="issued">
                    <label for="issued_by" class="col-md-4 col-form-label text-md-end">{{ __('Кем выдан') }}</label>
                    <input id="issued_by" type="text" class="form-control @error('issued_by') is-invalid @enderror" name="issued_by" value="{{ old('issued_by') }}" required autocomplete="issued_by" autofocus>
                    
                    @error('issued_by')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            
                
                <div class="address">
                    <label for="home_address" class="col-md-4 col-form-label text-md-end">{{ __('Домашний адрес') }}</label>
                    <input id="home_address" type="text" class="form-control @error('home_address') is-invalid @enderror" name="home_address" value="{{ old('home_address') }}" required autocomplete="home_address" autofocus>
                    
                    @error('home_address')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>
            
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email адрес') }}</label>
                
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        <div class="pwd-cont">

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>
                
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Повторите пароль') }}</label>
                
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
        </div>
        <div class="login-cont">

            <div class="login-btn-link">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Зарегистрироваться') }}
                    </button>
                </div>
            </div>
        </div>
        </form>
</div>
@endsection
