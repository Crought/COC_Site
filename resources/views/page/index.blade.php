@extends('common.layout')

@section('content')

<div id="main_container">
    <h1>TOPページ</h1>
    <a href="{{route('scenario.list')}}">シナリオ一覧へ</a>
    <div style="height: 400px; width: 800px; background-color: #1f648b">コンテント</div>
</div>

@endsection