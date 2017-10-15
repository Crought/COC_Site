@extends('common.layout')

@section('content')

    <ul class="breadcrumb">
        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="{{route("index")}}" itemprop="">
                <span itemprop="title">トップページ</span>
            </a>
        </li>
        <li>></li>
        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
            <span itemprop="title">シナリオ一覧</span>
        </li>
        <!--
              <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="https://" itemprop="">
                  <span itemprop="title"></span>
                </a>
              </li>
        -->
    </ul>
    <div id="main_container">

        @include("common.sideMenu")

        <div id="main_menu">
            <div id="scenario_list">
                <h3>検索結果</h3>

                @foreach($scenarios as $scenario)
                <a href="{{route("scenario.detail", ['id' => $scenario['id']])}}">
                    <table>
                        <tbody>
                        <p>{{$scenario['title']}}/{{$scenario['contributor']}}</p>
                        <tr>
                            <th>プレイ人数</th>
                            <th>プレイ時間</th>
                            <th>KP難易度</th>
                            <th>PL難易度</th>
                            <th>投稿日</th>
                            <th>タグ</th>
                        </tr>
                        <tr>
                            <td>{{$scenario['player_number']}}</td>
                            <td>{{$scenario['playing_time']}}時間程度</td>
                            <td>{{$scenario['keeper_technique']}}</td>
                            <td>{{$scenario['player_technique']}}</td>
                            <td>{{$scenario['created_at']}}</td>
                            <td>{{$scenario['scenario_tag_id']}}</td>
                        </tr>
                        <tr>
                            <td colspan="7">{{$scenario['description']}}</td>
                        </tr>
                        </tbody>
                    </table>
                </a>
                @endforeach

            </div>
        </div>
    </div>

@endsection