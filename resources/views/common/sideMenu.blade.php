<div id="sub_menu" >
    <div id="scenario_search">
        <h3>シナリオを探す</h3>
        <ul>
            <li>タイトル/作者から探す</li>
            <div class="search_name">
                <input type="text" name="text" value=""><i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <li class="search">プレイ人数から探す</li>
            <div class="play_time none">
                <ul>
                    <li><a href="{{route("scenario.list")}}">１～３人程度</a></li>
                    <li><a href="{{route("scenario.list")}}">２～４人程度</a></li>
                    <li><a href="{{route("scenario.list")}}">４～６人程度</a></li>
                    <li><a href="{{route("scenario.list")}}">６人以上</a></li>
                </ul>
            </div>
            <li class="search">プレイ時間から探す</li>
            <div class="play_time none">
                <ul>
                    <li><a href="">５時間以下</a></li>
                    <li><a href="">５～１２時間</a></li>
                    <li><a href="">１２～２４時間</a></li>
                    <li><a href="">２４時間以上</a></li>
                </ul>
            </div>
            <li class="search">KP難易度から探す</li>
            <div class="kp_difficulty none">
                <ul>
                    <li><a href="">★☆☆☆☆</a></li>
                    <li><a href="">★★☆☆☆</a></li>
                    <li><a href="">★★★☆☆</a></li>
                    <li><a href="">★★★★☆</a></li>
                    <li><a href="">★★★★★</a></li>
                </ul>
            </div>
            <li class="search">PL難易度から探す</li>
            <div class="pl_difficulty none">
                <ul>
                    <li><a href="">★☆☆☆☆</a></li>
                    <li><a href="">★★☆☆☆</a></li>
                    <li><a href="">★★★☆☆</a></li>
                    <li><a href="">★★★★☆</a></li>
                    <li><a href="">★★★★★</a></li>
                </ul>
            </div>
        </ul>
    </div>
    <div id="favorite_tag">
        <h3>良く使用されているタグ</h3>
        <ul class="tag_flex">
            <li class="tag_name">#ホラー</li>
            <li class="tag_name">#コズミック</li>
            <li class="tag_name">#closed</li>
            <li class="tag_name">#open</li>
            <li class="tag_name">#現代日本</li>
            <li class="tag_name">#1920</li>
            <li class="tag_name">#アメリカ</li>
            <li class="tag_name">#アジア</li>
            <li class="tag_name">#</li>
        </ul>
    </div>
    <div id="scenario_post">
        <h3><a href="{{route("scenario.getPost")}}">シナリオを投稿する</a></h3>
    </div>
</div>