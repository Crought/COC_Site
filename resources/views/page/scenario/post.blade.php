@extends('common.layout')

@section('content')

    <div id="main_container">
        <h1>投稿</h1>
        <a href="{{route('index')}}">TOPへ</a>
        <a href="{{route('scenario.list')}}">一覧へ</a>
        <form method="post" action="{{route('scenario.postPost')}}">
            {{ csrf_field() }}

            <label>シナリオ名</label>
            <input type="text" name="title">

            <label>投稿者名</label>
            <input type="text" name="contributor">

            <label>プレイ人数</label>
            <select name="player_number">
                <option value="1">1人</option>
                <option value="2">1~4人程度</option>
                <option value="3">2~5人程度</option>
                <option value="4">3~6人程度</option>
                <option value="5">6人以上</option>
            </select>

            <label>時間</label>
            <input type="number" step="0.5" min="0" max="999" name="playing_time">

            <label>KP難易度</label>
            <span class="keeper_technique">
              <input type="radio" name="keeper_technique" value="1"><i></i>
              <input type="radio" name="keeper_technique" value="2"><i></i>
              <input type="radio" name="keeper_technique" value="3"><i></i>
              <input type="radio" name="keeper_technique" value="4"><i></i>
              <input type="radio" name="keeper_technique" value="5"><i></i>
            </span>

            <label>PL難易度</label>
            <span class="player_technique">
              <input type="radio" name="player_technique" value="1"><i></i>
              <input type="radio" name="player_technique" value="2"><i></i>
              <input type="radio" name="player_technique" value="3"><i></i>
              <input type="radio" name="player_technique" value="4"><i></i>
              <input type="radio" name="player_technique" value="5"><i></i>
            </span>

            <label>タグ</label>
            <select name="scenario_tag_id">
                <option value="1">あああ</option>
                <option value="2">いいい</option>
                <option value="3">ううう</option>
                <option value="4">えええ</option>
                <option value="5">おおお</option>
            </select>

            <label>シナリオ概要(200字まで)</label>
            <textarea name="description"></textarea>

            <label>シナリオ</label>
            <textarea name="scenario"></textarea>

            <input type="submit" value="投稿する">

        </form>
    </div>

@endsection