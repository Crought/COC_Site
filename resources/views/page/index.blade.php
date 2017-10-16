@extends('common.layout')

@section('content')

    <ul class="breadcrumb">
        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="{{route("index")}}" itemprop="">
                <span itemprop="title">トップページ</span>
            </a>
        </li>
        <!--
          <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="https://" itemprop="">
              <span itemprop="title">HTML&amp;CSS</span>
            </a>
          </li>
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
            <div id="favorite_scenario">
                <h3>注目のシナリオ</h3>
                @foreach($favorite_scenarios as $scenario)
                    @include('common.scenarioTable')
                @endforeach
                <div class="more"><a href="{{route('scenario.list')}}">もっと見る</a></div>
            </div>
            <div id="new_scenario">
                <h3>最近投稿されたシナリオ</h3>
                @foreach($new_scenarios as $scenario)
                    @include('common.scenarioTable')
                @endforeach

                <div class="more"><a href="{{route('scenario.list')}}">もっと見る</a></div>
            </div>
            <div id="news">
                <h3>お知らせ</h3>
                <div>
                    <table>
                        <tbody>
                        <tr>
                            <td>2017/10/14</td>
                            <td>osirase</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection