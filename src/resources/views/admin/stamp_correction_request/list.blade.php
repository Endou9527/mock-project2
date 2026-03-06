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
  <h2>申請一覧</h2>

  <input type="radio" name="" id="">申請待ち
  <input type="radio" name="" id="">承認済み

  <table>
    <tr>
      <th>状態</th>
      <th>名前</th>
      <th>対象日時</th>
      <th>申請理由</th>
      <th>申請日時</th>
      <th>詳細</th>
    </tr>
    {{-- @foreach('') --}}
    <tr>
      <td>{{-- status --}}</td>
      <td>{{-- 名前 --}}</td>
      <td>{{-- status --}}</td>
      <td>{{-- 対象日時 --}}</td>
      <td>{{-- 申請理由 --}}</td>
      <td>
        <a href="/attendance/{id}">詳細</a>
      </td>
    </tr>
  </table>
@endsection
