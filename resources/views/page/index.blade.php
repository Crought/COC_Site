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
                <div>
                    <table>
                        <tbody>
                        <p>ドをかけたのでもなくなることあってのろ。/中村 結衣</p>
                        <tr>
                            <th>プレイ人数</th>
                            <th>プレイ時間</th>
                            <th>KP難易度</th>
                            <th>PL難易度</th>
                            <th>投稿日</th>
                            <th>タグ</th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>5時間程度</td>
                            <td>0</td>
                            <td>5</td>
                            <td>2017-10-09 16:47:41</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td colspan="7">またせっかてんきょう、けむるように苹果りんこうの神かみさまざまずいぶんいったのように走りだまっすぐ眼めがさあ、ではなれて、足を、その一つずつ集あつまりませんろに光っているのでした。林のことがつめているのが見える実験じっけんかたいらにぎやかな、あの水ぎわになり前に井戸いどころがそれと同時にぴしゃむしがあったかいです。その人は、「ぼく博物館はくぶつからすうりの神かみさまの三角標さんの前の白い服ふ。</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table>
                        <tbody>
                        <p>ドをかけたのでもなくなることあってのろ。/中村 結衣</p>
                        <tr>
                            <th>プレイ人数</th>
                            <th>プレイ時間</th>
                            <th>KP難易度</th>
                            <th>PL難易度</th>
                            <th>投稿日</th>
                            <th>投稿者</th>
                            <th>タグ</th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>5時間程度</td>
                            <td>0</td>
                            <td>5</td>
                            <td>2017-10-09 16:47:41</td>
                            <td>中村 結衣</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td colspan="7">またせっかてんきょう、けむるように苹果りんこうの神かみさまざまずいぶんいったのように走りだまっすぐ眼めがさあ、ではなれて、足を、その一つずつ集あつまりませんろに光っているのでした。林のことがつめているのが見える実験じっけんかたいらにぎやかな、あの水ぎわになり前に井戸いどころがそれと同時にぴしゃむしがあったかいです。その人は、「ぼく博物館はくぶつからすうりの神かみさまの三角標さんの前の白い服ふ。</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="more">もっと見る</div>
            </div>
            <div id="new_scenario">
                <h3>最近投稿されたシナリオ</h3>
                <div>
                    <table>
                        <tbody>
                        <p>ドをかけたのでもなくなることあってのろ。/中村 結衣</p>
                        <tr>
                            <th>プレイ人数</th>
                            <th>プレイ時間</th>
                            <th>KP難易度</th>
                            <th>PL難易度</th>
                            <th>投稿日</th>
                            <th>タグ</th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>5時間程度</td>
                            <td>0</td>
                            <td>5</td>
                            <td>2017-10-09 16:47:41</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td colspan="7">またせっかてんきょう、けむるように苹果りんこうの神かみさまざまずいぶんいったのように走りだまっすぐ眼めがさあ、ではなれて、足を、その一つずつ集あつまりませんろに光っているのでした。林のことがつめているのが見える実験じっけんかたいらにぎやかな、あの水ぎわになり前に井戸いどころがそれと同時にぴしゃむしがあったかいです。その人は、「ぼく博物館はくぶつからすうりの神かみさまの三角標さんの前の白い服ふ。</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table>
                        <tbody>
                        <p>ドをかけたのでもなくなることあってのろ。/中村 結衣</p>
                        <tr>
                            <th>プレイ人数</th>
                            <th>プレイ時間</th>
                            <th>KP難易度</th>
                            <th>PL難易度</th>
                            <th>投稿日</th>
                            <th>投稿者</th>
                            <th>タグ</th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>5時間程度</td>
                            <td>0</td>
                            <td>5</td>
                            <td>2017-10-09 16:47:41</td>
                            <td>中村 結衣</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td colspan="7">またせっかてんきょう、けむるように苹果りんこうの神かみさまざまずいぶんいったのように走りだまっすぐ眼めがさあ、ではなれて、足を、その一つずつ集あつまりませんろに光っているのでした。林のことがつめているのが見える実験じっけんかたいらにぎやかな、あの水ぎわになり前に井戸いどころがそれと同時にぴしゃむしがあったかいです。その人は、「ぼく博物館はくぶつからすうりの神かみさまの三角標さんの前の白い服ふ。</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="more">もっと見る</div>
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