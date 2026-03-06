@extends('layouts.admin')

@section('title', '勤怠一覧（管理者）')

@section('header_inner')
  <a href="/attendance/list">勤怠一覧</a>
  <a href="/staff/list">スタッフ一覧</a>
  <a href="/stamp_correction_request/list">申請一覧</a>
  <a href="">ログアウト</a>
@endsection

@section('content')
    <h2>{{--今日の日付--}}の勤怠</h2>

    <div class="date_select">
        <a href="">前日</a>
        <div class="today">
            <input type="date" name="" id="">
            <p>{{--今日の年月日--}}</p>
        </div>
        <a href="">翌日</a>
    </div>

    <table border="1">
        <tr>
            <th>名前</th>
            <th>出勤</th>
            <th>退勤</th>
            <th>休憩</th>
            <th>詳細</th>
        </tr>

        {{--@foreach($attendances as $attendance)--}}
        <tr>
            <td>{{-- $attendance->user->name --}}</td>
            <td>{{--$attendance->clock_in --}}</td>
            <td>{{-- $attendance->clock_out --}}</td>
            <td>{{-- $break --}}</td>
            <td>
                <a href="/attendance/{id}"></a>
            </td>
        </tr>
        {{--@endforeach--}}
    </table>
@endsection