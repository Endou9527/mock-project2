@extends('layouts.admin')

@section('title' , '管理者ログイン')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header_inner')
@endsection

@section('content')
  <h2 class="page_title">管理者ログイン</h2>
  <form class="form" action="/login" method="post">
    @csrf
    <label for="email">メールアドレス
      <input type="text" id="email" name="email" />
    </label>
    @error('email')
      <div class="error-message">{{ $message }}</div>
    @enderror
    <label for="password">パスワード
      <input type="password" id="password" name="password" />
    </label>
    <button type="submit">管理者ログインする</button>
  </form>
@endsection