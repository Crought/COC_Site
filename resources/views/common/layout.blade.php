<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>クトゥルフ神話シナリオ置き場</title>
    <link rel="stylesheet" type="text/css" href="{{asset("font-awesome/css/font-awesome.min.css")}}">
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}">
</head>
<body>
<header>
    <div id="header_container">
        <h1>クトゥルフ神話シナリオ置き場</h1>
        <p>ここはクトゥルフ神話TRPGのシナリオを保管,シェアするサイトです。</p>
    </div>
</header>
<main>

    @yield('content')

</main>
<footer>
    <div id="footer_container">
        <div class="footer_contents">
            <ul>
                <li>タイトル/作者から探す</li>
                <div class="search_name">
                    <input type="text" name="text" value=""><i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <li class="search">プレイ人数から探す</li>
                <div class="play_time none">
                    <ul>
                        <li><a href="">１～３人程度</a></li>
                        <li><a href="">２～４人程度</a></li>
                        <li><a href="">４～６人程度</a></li>
                        <li><a href="">６人以上</a></li>
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
        <div class="footer_contents">
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
        <div class="footer_contents">
            <ul>
                <li>トップページへ戻る</li>
                <li>利用規約</li>
                <li>ヘルプ</li>
                <li>ガイドライン</li>
                <li><i class="fa fa-twitter" aria-hidden="true"></i>Twitterをチェックする</li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</footer>
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous">
</script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>