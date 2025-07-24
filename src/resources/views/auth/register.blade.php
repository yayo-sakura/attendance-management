@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<form action="/register" method="post" class="register-form__form">
    @csrf
    <h1 class="register-form__heading">会員登録</h1>
    <label for="name" class="register-form__label">名前</label>
    <input name="name" id="name" type="text" class="register-form__input" value="{{ old('name') }}">
    <div class="form__error">
        @error('name')
        {{ $message }}
        @enderror
    </div>
    <label for="mail" class="register-form__label">メールアドレス</label>
    <input name="email" id="mail" type="email" class="register-form__input" value="{{ old('email') }}">
    <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror
    </div>
    <label for="password" class="register-form__label">パスワード</label>
    <input name="password" id="password" type="password" class="register-form__input">
    <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
    </div>
    <label for="password_confirm" class="register-form__label">パスワード確認</label>
    <input name="password_confirmation" id="password_confirm" type="password" class="register-form__input">
    <button class="register-form__btn">登録する</button>
    <a href="/login" class="footer__link">ログインはこちら</a>
</form>
@endsection