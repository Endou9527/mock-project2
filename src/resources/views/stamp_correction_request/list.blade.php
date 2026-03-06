@extends('layouts.app')

@section('title')
@endsection

@section('css')
  <link rel="stylesheet" href="list.css">
@endsection

@section('header_inner')
  <a href="">勤怠</a>
  <a href="">勤怠一覧</a>
  <a href="">申請</a>
  <a href="">ログアウト</a>
@endsection

@section('content')
  <div class="tab-waiting"></div>
    <input type="radio" name="waiting" id="waiting">
    <label class="tab-label" for="waiting"></label>
  <div class="tab-corrected"></div>
    <input type="radio" name="corrected" id="corrected">
    <label class="tab-label" for="corrected"></label>
  
  <div class="tab-content-wrapper">
    <div class="tab-content" id="waiting-content">
      <table>
        <tr>
          <th>状態</th>
          <th>名前</th>
          <th>対象日時</th>
          <th>申請理由</th>
          <th>申請日時</th>
          <th>詳細</th>
        </tr>
        @foreach
        <tr>
          <td>{{-- 状態 --}}</td>
          <td>{{-- 名前 --}}</td>
          <td>{{-- 対象日時 --}}</td>
          <td>{{-- 申請理由 --}}</td>
          <td>{{-- 申請日時 --}}</td>
          <td>{{-- 詳細 --}}</td>
        </tr>
      </table>
    </div>
    <div class="tab-content" id="corrected-content">
      <table>
        <tr>
          <th>状態</th>
          <th>名前</th>
          <th>対象日時</th>
          <th>申請理由</th>
          <th>申請日時</th>
          <th>詳細</th>
        </tr>
        @foreach
        <tr>
          <td>{{-- 状態 --}}</td>
          <td>{{-- 名前 --}}</td>
          <td>{{-- 対象日時 --}}</td>
          <td>{{-- 申請理由 --}}</td>
          <td>{{-- 申請日時 --}}</td>
          <td>{{-- 詳細 --}}</td>
        </tr>
      </table>
    </div>
  </div>
@endsection