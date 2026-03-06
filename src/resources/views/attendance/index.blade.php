@extends('layouts.app')

@section('title')
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css') }}">
@endsection

@section('header_inner')
  <a href="">勤怠</a>
  <a href="">勤怠一覧</a>
  <a href="">申請</a>
  <a href="">ログアウト</a>
@endsection

@section('content')
  <div class="status"></div>
  <div class="date"></div>
  <div class="time"></div>
  <div class="attendance"></div>
@endsection