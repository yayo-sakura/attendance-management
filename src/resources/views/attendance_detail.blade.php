@extends('layouts.general_user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance_detail.css') }}">
@endsection

@section('content')
<div class="attendance">
    <h2 class="title">勤怠詳細</h2>
    <div class="attendance-detail">
        <form action="/attendance/{id}" method="post" class="attendance-detail__form">
        @csrf
            <div class="attendance-detail__group">
                <label class="attendance-detail__label" for="name">名前</label>
                <input class="input-name" type="name" name="name" value="西 怜奈" readonly>
            </div>
            <div class="attendance-detail__group">
                <label class="attendance-detail__label" for="date">日付</label>
                <input class="input-date" type="text" name="date" value="2023年" readonly>
                <input class="input-date" type="text" name="date" value="6月1日"  readonly>
            </div>
            <div class="attendance-detail__group">
                <label class="attendance-detail__label" for="working-hours">出勤・退勤</label>
                <input class="input-time" type="time" name="start-time" value="">
                    <div class="form__error">
                        @error('start_time')
                        {{ $message }}
                        @enderror
                    </div>
                <p class="～">～</P>
                <input class="input-time" type="time" name="end-time" value="">
                    <div class="form__error">
                        @error('end_time')
                        {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="attendance-detail__group">
                <label class="attendance-detail__label" for="break">休憩</label>
                <input class="input-time" type="time" name="break-take" value="">
                    <div class="form__error">
                        @error('break-take')
                        {{ $message }}
                        @enderror
                    </div>
                <p class="～">～</P>
                <input class="input-time" type="time" name="break-return" value="">
                    <div class="form__error">
                        @error('break-return')
                        {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="attendance-detail__group">
                <label class="attendance-detail__label" for="break2">休憩2</label>
                <input class="input-time" type="time" name="break-taka2" value="">
                    <div class="form__error">
                            @error('break-take')
                            {{ $message }}
                            @enderror
                    </div>
                <p class="～">～</P>
                <input class="input-time" type="time" name="break-return2" value="">
                    <div class="form__error">
                            @error('break-return')
                            {{ $message }}
                            @enderror
                    </div>
            </div>
            <div class="attendance-detail__group">
                <label class="attendance-detail__label" for="textarea">備考</label>
                <textarea name="textarea" cols="100" rows="3"></textarea>
                    <div class="form__error">
                            @error('remarks')
                            {{ $message }}
                            @enderror
                    </div>
            </div>
            <input class="attendance-detail__btn" type="submit" value="修正" name="btn">
        </form>
    </div>
</div>
@endsection