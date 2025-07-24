@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/staff_list.css') }}">
@endsection

@section('content')
<div class="staff-list">
    <h2 class="title">スタッフ一覧</h2>
    <table class="staff-list__table">
        <tr class="staff-list__table--row">
            <th class="staff-list__table--header-name">名前</th>
            <th class="staff-list__table--header-email">メールアドレス</th>
            <th class="staff-list__table--header-monthly-attendance">月次勤怠</th>
        </tr>
        <tr class="staff-list__table--row">
            <td class="staff-list__table--content">

            </td>
            <td class="staff-list__table--content">

            </td>
            <td class="staff-list__table--content">

            </td>
        </tr>
    </table>
</div>
@endsection