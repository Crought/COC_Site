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
            <a href="{{route("scenario.list")}}" itemprop="">
                <span itemprop="title">シナリオ一覧</span>
            </a>
        </li>
        <li>></li>
        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
            <span itemprop="title">シナリオ</span>
        </li>
    </ul>
    <div id="main_container">

        @include("common.sideMenu")

        <div id="main_menu">
            <div id="scenario_contents">
                <h3>{{$scenario['title']}}</h3>
                <div>

                </div>
            </div>
        </div>
    </div>

@endsection