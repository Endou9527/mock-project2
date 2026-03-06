@extends('layouts.app')

@section('title', '勤怠一覧')
@endsection

@section('header_inner')
  <a href="">勤怠</a>
  <a href="">勤怠一覧</a>
  <a href="">申請</a>
  <a href="">ログアウト</a>
@endsection


@section('content')
    <h2>勤怠一覧</h2>

    <table border="1">
        <tr>
            <th>日付</th>
            <th>出勤</th>
            <th>退勤</th>
            <th>詳細</th>
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