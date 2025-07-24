@extends('layouts.general_user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div class="attendance">
    @if($attendance && $attendance->start_time && !$attendance->end_time)
    <p class="attendance-status">出勤中</p>
    @elseif($attendance && $attendance->start_time && $break_time && $break_time->break_take && !$attendance->end_time)
    <p class="attendance-status">休憩中</p>
    @elseif($attendance && $attendance->start_time && $attendance->end_time)
    <p class="attendance-status">退勤済</p>
    @else
    <p class="attendance-status">勤務外</p>
    @endif
    <h1 class="attendance-date">{{ Carbon::now()->isoformat('YYYY年MM月DD日(ddd)') }}</h1>
    <h2 class="attendance-time">{{ Carbon::now()->format('H:i') }}</h2>
    @if($attendance && $attendance->start_time && !$attendance->end_time)
    <form action="/attendance" method="post" class="attendance-form">
    @csrf
    @method('PUT')
        <button class="attendance-form__btn--end_time" type="submit" value="end_time" name="end_time">退勤</button>
        <button class="attendance-form__btn--break_take" type="submit" value="break_take" name="break_take">休憩入</button>
    </form>
    @elseif($attendance && $attendance->start_time && $break_time->break_take && !$attendance->end_time)
    <form action="/attendance" method="post" class="attendance-form">
    @csrf
    @method('PUT')
        <button class="attendance-form__btn--break_return" type="submit" value="break_return" name="break_return">休憩戻</button>
    </form>
    @else
    <form action="/attendance" method="post" class="attendance-form">
    @csrf
        <button class="attendance-form__btn--start_time" type="submit" value="start_time" name="start_time">出勤</button>
    </form>
    @endif
</div>
@endsection