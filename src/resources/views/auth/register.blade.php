@extends('layouts.app')

@section('title' , '会員登録')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header_inner')
@endsection

@section('content')
  <h2 class="page_title">会員登録</h2>
  <form class="form" action="/login" method="post">
    @csrf
    <label for="email">名前
      <input type="text" id="name" name="name" />
    </label>
    @error('name')
      <div class="error-message">{{ $message }}</div>
    @enderror
    <label for="email">メールアドレス
      <input type="text" id="email" name="email" />
    </label>
    @error('email')
      <div class="error-message">{{ $message }}</div>
    @enderror
    <label for="password">パスワード
      <input type="password" id="password" name="password" />
    </label>
    @error('password')
      <div class="error-message">{{ $message }}</div>
    @enderror
    <label for="password">パスワード確認
      <input type="password" id="check" name="check" />
    </label>
    @error('check')
      <div class="error-message">{{ $message }}</div>
    @enderror
    <button type="submit">登録する</button>
  </form>
  <a href="/login">ログインはこちら</a>
@endsection