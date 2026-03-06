@extends('layouts.admin')

@section('title')
@endsection

@section('css')
@endsection

@section('header_inner')
  <a href="">勤怠一覧</a>
  <a href="">スタッフ一覧</a>
  <a href="">申請一覧</a>
  <a href="">ログアウト</a>
@endsection

@section('content')
    <h2>勤怠詳細</h2>

    <table border="1">
        <tr>
            <th>名前</th>
            <td></td>
        </tr>
        <tr>
            <th>日付</th>
            <td>{{-- 年 --}}</td>
            <td>　</td>
            <td>{{-- 月日 --}}</td>
        </tr>
        <tr>
            <th>出勤・退勤</th>
            <td>{{-- 出勤 --}}</td>
            <td></td>〜
            <td>{{-- 退勤 --}}</td>
        </tr>
        <tr>
            <th>休憩１</th>
            <td>{{-- 休憩始 --}}</td>
            <td></td>〜
            <td>{{-- 休憩終 --}}</td>
        </tr>
        <tr>
            <th>休憩２</th>
            <td>{{-- 休憩始 --}}</td>
            <td></td>〜
            <td>{{-- 休憩終 --}}</td>
        </tr>
        <tr>
            <th>備考</th>
            <td></td>
        </tr>

        @foreach($attendances as $attendance)
        <tr>
            <td>{{ $attendance->work_date }}</td>
            <td>{{ $attendance->clock_in }}</td>
            <td>{{ $attendance->clock_out }}</td>
            <td>
                <a href="/attendance/detail/{{ $attendance->id }}">詳細</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection