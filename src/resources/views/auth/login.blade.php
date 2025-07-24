@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-form">
    <h1 class="login-form__heading">ログイン</h1>
    <form action="/login" method="post" class="login-form__form">
    @csrf
        <div class="login-form__group">
            <label class="login-form__label" for="name">メールアドレス</label>
            <input class="login-form__input" type="mail" name="email" id="email">
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="login-form__group">
            <label class="login-form__label" for="name">パスワード</label>
            <input class="login-form__input" type="password" name="password" id="password">
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <input class="login-form__btn" type="submit" value="ログインする">
        <a href="/register" class="link">会員登録はこちら</a>
    </form>
@endsection