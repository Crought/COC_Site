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
                <span itemprop="title">シナリオ投稿</span>
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

        <div id="post_form">
            <h3>シナリオ投稿</h3>
            <form method="post" action="">
                <table>
                    <tbody>
                    <tr>
                        <td class=""><label>シナリオ名</label></td>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td><label>投稿者名</label></td>
                        <td><input type="text" name="contributor"></td>
                    </tr>
                    <tr>
                        <td><label>推奨プレイ人数</label></td>
                        <td>
                            <select name="player_number">
                                <option value="2">1~3人程度</option>
                                <option value="3">2~4人程度</option>
                                <option value="4">4~6人程度</option>
                                <option value="5">6人以上</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>推定プレイ時間</label></td>
                        <td><input type="number" step="0.5" min="0" max="999" name="playing_time"></td>
                    </tr>
                    <tr>
                        <td>KP難易度</td>
                        <td>
                            <select name="keeper_technique">
                                <option name="keeper_technique" value="1">★☆☆☆☆</option>
                                <option name="keeper_technique" value="2">★★☆☆☆</option>
                                <option name="keeper_technique" value="3">★★★☆☆</option>
                                <option name="keeper_technique" value="4">★★★★☆</option>
                                <option name="keeper_technique" value="5">★★★★★</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>PL難易度</label></td>
                        <td>
                            <select name="player_technique">
                                <option name="player_technique" value="1">★☆☆☆☆</option>
                                <option name="player_technique" value="2">★★☆☆☆</option>
                                <option name="player_technique" value="3">★★★☆☆</option>
                                <option name="player_technique" value="4">★★★★☆</option>
                                <option name="player_technique" value="5">★★★★★</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>タグ</label></td>
                        <td><input type="text" name="title">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><label>シナリオ概要(200字まで)</label></td>
                        <td><textarea name="description" rows="7" cols="100"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>シナリオ</label></td>
                        <td><textarea name="scenario" rows="100" cols="100"></textarea></td>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" value="投稿する">
            </form>
        </div>
    </div>

@endsection