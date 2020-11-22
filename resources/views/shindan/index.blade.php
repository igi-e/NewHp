<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- レスポンシブの設定 -->
    <title>(有)猪木酸素玉島店</title>
    <link rel="stylesheet" href="../css/humbager.css">

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"><!-- リセットcss：ブラウザの違いによる表示の違いをなくする -->
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet"><!-- google fontsを使う -->
    <link rel="stylesheet" href="../css/small.css" media="screen and (max-width:480px)"><!--　画面サイズが480pxまでこのファイルのスタイルが適用される。 -->
    <link rel="stylesheet" href="../css/medium.css" media="screen and (min-width:480px) and (max-width:1024px)"> <!-- 画面サイズ480pxから1024pxまではこのファイルのスタイルが適用される。 -->
    <link rel="stylesheet" href="../css/wide.css" media="screen and (min-width:1024px)"><!-- 画面サイズ1024px以上はこのファイルはスタイルが適用される。 -->
    <link href="../css/style.css" rel="stylesheet"> <!-- レスポンシブにするため上の3行にした -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <!--スライダー-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-81308500-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    <?php $tel = "086-526-1212"; ?>


    <div class="header">
        <div class="header-right">
            <div class="header-logo">
                <a href="index.blade.php">
                    <img class="logo" src="../../img/logo.jpg" alt="(有)猪木酸素玉島店"></a>
            </div>

            <div class="address">
                <address>本社：〒713-8102　岡山県倉敷市玉島1599-5<br>岡山事業所：〒703-8296　岡山市中区さくら住座10-1</address>
            </div>
        </div>

        <div class="header-right">
            <div class="header-right_top">
                <div class="header-tel">
                    <aside>お電話受付時間　平日9:00～17:00</aside>
                    <p class="header-tel"><a href="tel:086-526-1212">tel:086-526-1212</a></p>
                </div>

                <!-- <p class="header-tel"><a href="tel:<?php echo $tel ?>">tel: <?php echo $tel ?></a></p> -->
                <!-- aタグはインラインのためcssのtext-alignで右に寄せれないためpタグを追加 -->

                <div class="header-contact">
                    <p><a class="button" href="/contact">✉　お問い合わせ・<br>資料請求はこちら</a></p>
                </div>
            </div>

            <div class="header-right_under">
                <nav class="nav-pc">
                    <ul class="main-nav">
                        <li><a href="/">トップページ<br>HOME</a></li>
                        <li><a href="about/">私たちについて<br>about us</a></li>
                        <!--<a href="about/index.blade.php">ではない-->
                        <li><a href="service/">事業内容<br>service</a></li>
                        <li><a href="http://igisanso.com/diary/">ブログ<br>blog</a></li>
                        <!-- <li><a href="map/">アクセス<br>access</a></li> -->
                        <li><a href="#map" class="isActive">アクセス<br>access</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- ハンバーガーメニュー -->
    <div class="inner nav-sp">

        <p class="navBtn">
            <span></span>
            <span></span>
            <span></span>
        </p>
        <nav role='navigation'>
            <ul>
                <li><a href="/">トップページ [HOME]</a></li>
                <li><a href="about/">私たちについて [ABOUT US]</a></li>
                <li><a href="service/">事業内容 [SERVICE]</a></li>
                <li><a href="blog/">ブログ [BLOG]</a></li>
                <li><a href="map/">アクセス [ACCESS]</a></li>
            </ul>
        </nav>
        <!-- /.inner -->
    </div>
    </div>

    <div class="syouene_info">
        <h2無料省エネ診断のご案内</h2> <p><img src="/img/syouene3.jpg" class="syouene3"></p>
            <p>猪木酸素の無料診断をしてみませんか？<br>「こんなに古い物でも省エネ出来るの？」<br>
「こんなに削減出来るんだ！」<br>
と改めて省エネの効果を知り驚いています。<br><br>そこで…お客様にも、もっと省エネの効果を感じていただきたくて…　
<br>• 無料省エネ・コスト削減診断・提案<br>• 補助金サポート<br>• 省エネ・コスト削減＆補助金の情報提供
<br>などを行なっています！</p><br>
            <h3>環境・エネルギーコストに対する「よくあるお困りごと」</h3>
            <p>・こんな悩み事…抱えていらっしゃいませんか？<br>・省エネ対策をしたいが、どこから取り掛かればいいかわからない…<br>・エネルギー使用量を把握したいけど、どうしたらいいのかわからない…<br>・省エネ対策って結局お金がかかるだけでしょう…？<br>・補助金を活用したいけど、どうやればいいの…？いつ出るの…？<br>・もう自分たちでやれることはやり尽くしたつもりだけど…<br>・電気の省エネはいろいろあるみたいだけど、燃料代って削減できるの…？<br>・省エネもいいけど、夏場の暑さ対策や衛生対策の方が課題…<br>・省エネ商材の売り込みが多くって、もうウンザリ…<br>・省エネ・コスト削減は急務！でも、それ以上に日常業務に忙殺されて…<br>・インターネットの情報だけではもう限界！<br>・省エネ・コスト削減の専門家に一度しっかりと見てもらいたい！
</p>

    </div>

    <article>
        <h2>猪木酸素が提供する「省エネ・コスト削減」事業のご紹介</h2>
        <div class="syouene_info">
            <p>お客様の施設まるごと様々な節電対策、CO2の削減や老朽設備の更新、無駄な電力使用の防止などエネルギーの使用効率の向上を目指して。私たち「猪木酸素の省エネ」がそれを実現します</p>
        </div>

        <div class="syouene_btn">
            <a class="btn-social-square btn-social-square--hatebu" href="/syouene/">
                猪木酸素の<br>省エネ
            </a>
            <a class="btn-social-square btn-social-square--hatebu" href="/shindan/">
                無料<br>省エネ診断
            </a>
            <a class="btn-social-square btn-social-square--hatebu" href="/hojokin/">
                補助金申請<br>サポート
            </a>
            <a class="btn-social-square btn-social-square--hatebu" href="/question/">よくある<br>質問
            </a>
        </div>
    </article>

    <div class="page-footer wrapper">
        <a href="index.blade.php">
            <img class="footer-logo" src="../../img/logo.jpg" alt="(有)猪木酸素玉島店"></a>
        <div class="footer-tel">
            <p>お気軽にご連絡ください。社員一同お待ちしております。</p>
            <a href="tel:<?php echo $tel ?>" class="tel">tel: <?php echo $tel ?></a>
        </div>
    </div>

    <footer>
        <div>
            <p><small>&copy; 2020 Igisanso</small></p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--jQueryのCDN-->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="/js/humbager.js"></script>

    <!--スライダー-->
    <script>
        $(function() {
            $(".fade-img img:not(:first-child)").hide();
            setInterval(function() {
                $(".fade-img img:first-child").fadeOut("slow").next("img").fadeIn("slow").end().appendTo(".fade-img");
            }, 5000);
        });
    </script>
</body>

</html>