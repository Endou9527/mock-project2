@extends('layouts.admin')

@section('title', '勤怠一覧（管理者）')
@endsection

@section('css')
@endsection

@section('header_inner')
  <a href="/attendance/list">勤怠一覧</a>
  <a href="/staff/list">スタッフ一覧</a>
  <a href="/stamp_correction_request/list">申請一覧</a>
  <a href="">ログアウト</a>
@endsection

@section('content')
  <h2>スタッフ一覧</h2>

  <table>
    <tr>
      <th>名前</th>
      <th>メールアドレス</th>
      <th>月次勤怠</th>
    </tr>
    {{-- @foreach('') --}}
    <tr>
      <td>{{-- 名前 --}}</td>
      <td>{{-- メールアドレス --}}</td>
      <td>
        <a href="/attendance/staff/{id}">詳細</a>
      </td>
    </tr>
  </table>
@endsection
