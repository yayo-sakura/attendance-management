@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/staff_attendance_list.css') }}">
@endsection

@section('content')
<div class="attendance-list">
    <h2 class="title">〇〇さんの勤怠</h2>

    <div class="date">
        <div class="date-show">
            <img src="{{ asset('/image/arrow.png') }}" alt="矢印の画像" class="img-arrow__yesterday" />
            <p class="date-yesterday">前日</p>
        </div>
        <div class="date-show">
            <img src="{{ asset('/image/calendar.png') }}" alt="カレンダーの画像" class="img-calendar" />
            <p class="date-today">{{ Carbon::now()->format('Y/m') }}</p>
        </div>
        <div class="date-show">
            <p class="date-tomorrow">翌日</p>
            <img src="{{ asset('/image/arrow.png') }}" alt="矢印の画像" class="img-arrow__tomorrow" />
        </div>
    </div>
    <table class="attendance-list__table">
        <tr class="attendance-list__table--row">
            <th class="attendance-list__table--header-date">日付</th>
            <th class="attendance-list__table--header-attendance-work">出勤</th>
            <th class="attendance-list__table--header-leaving-work">退勤</th>
            <th class="attendance-list__table--header-break">休憩</th>
            <th class="attendance-list__table--header-total">合計</th>
            <th class="attendance-list__table--header-detail">詳細</th>
        </tr>
        <tr class="attendance-list__table--row">
            <td class="attendance-list__table--content">

            </td>
            <td class="attendance-list__table--content">

            </td>
            <td class="attendance-list__table--content">

            </td>
            <td class="attendance-list__table--content">

            </td>
            <td class="attendance-list__table--content">

            </td>
            <td class="attendance-list__table--content">

            </td>
        </tr>
    </table>
    <form action="/admin/attendance/staff/{id}" method="post" class="attendance-form">
    @csrf
        <input class="attendance-form__btn" type="submit" value="CSV出力" name="btn">
    </form>
</div>
@endsection