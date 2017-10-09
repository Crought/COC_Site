@extends('common.layout')

@section('content')

    <div id="main_container">
        <h1>一覧</h1>
        <a href="{{route('index')}}">TOPへ</a>
        <a href="{{route('scenario.getPost')}}">投稿</a>
        <table border="1">
            <tr>
                <th>シナリオ名</th>
                <th>プレイ人数</th>
                <th>プレイ時間</th>
                <th>キーパー難易度</th>
                <th>プレイヤー難易度</th>
                <th>投稿日</th>
                <th>投稿者</th>
                <th>タグ</th>
            </tr>
            @foreach($scenarios as $scenario)
                <tr>
                    <td rowspan="2">{{$scenario['title']}}</td>
                    <td>{{$scenario['player_number']}}</td>
                    <td>{{$scenario['playing_time']}}時間程度</td>
                    <td>{{$scenario['keeper_technique']}}</td>
                    <td>{{$scenario['player_technique']}}</td>
                    <td>{{$scenario['created_at']}}</td>
                    <td>{{$scenario['contributor']}}</td>
                    <td>{{$scenario['scenario_tag_id']}}</td>
                </tr>
                <tr>
                    <td colspan="7">{{$scenario['description']}}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection