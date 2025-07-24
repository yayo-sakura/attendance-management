@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/correction_request_list.css') }}">
@endsection

@section('content')
<div class="request-list">
    <h2 class="title">申請一覧</h2>

    <div class="border">
        <ul class="border__list">
            <li><a href="">承認待ち</a></li>
            <li><a href="">承認済み</a></li>
        </ul>
    </div>
    <table class="request-list__table">
        <tr class="request-list__table--row">
            <th class="request-list__table--header-state">状態</th>
            <th class="request-list__table--header-name">名前</th>
            <th class="request-list__table--header-target-date">対象日時</th>
            <th class="request-list__table--header-reason">申請理由</th>
            <th class="request-list__table--header-request-date">申請日時</th>
            <th class="request-list__table--header-detail">詳細</th>
        </tr>
        <tr class="request-list__table--row">
            <td class="request-list__table--content">

            </td>
            <td class="request-list__table--content">

            </td>
            <td class="request-list__table--content">

            </td>
            <td class="request-list__table--content">

            </td>
            <td class="request-list__table--content">

            </td>
            <td class="request-list__table--content">

            </td>
        </tr>
    </table>
</div>
@endsection