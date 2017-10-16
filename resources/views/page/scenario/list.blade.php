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
                {{ $scenarios->links() }}
                @foreach($scenarios as $scenario)
                    @include('common.scenarioTable')
                @endforeach

            </div>
        </div>
    </div>

@endsection