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


    <header class="page-header wrapper">
        <div class="header-logo">
            <a href="index.blade.php">
                <img class="logo" src="../../img/logo.jpg" alt="(有)猪木酸素玉島店"></a>
            <!-- <p class="tel">tel: <?php echo $tel ?></p> -->
            <p class="header-tel"><a href="tel:<?php echo $tel ?>">tel: <?php echo $tel ?></a></p>
            <!-- aタグはインラインのためcssのtext-alignで右に寄せれないためpタグを追加 -->
        </div>

        <nav>
            <ul class="main-nav">
                <li><a href="/">トップページ<br>HOME</a></li>
                <li><a href="about/">私たちについて<br>about us</a></li>
                <!--<a href="about/index.blade.php">ではない-->
                <li><a href="service/">事業内容<br>service</a></li>
                <li><a href="question/">ブログ<br>blog</a></li>


            </ul>
        </nav>

        <!-- ハンバーガーメニュー -->
        <div class="inner">

            <p class="navBtn">
                <span></span>
                <span></span>
                <span></span>
            </p>
            <nav role='navigation'>
                <ul>
                    <li><a href="/">トップページ [HOME]</a></li>
                    <li><a href="/about">私たちについて [ABOUT US]</a></li>
                    <li><a href="/service">事業内容 [SERVICE]</a></li>
                    <li><a href="/blog">ブログ [BLOG]</a></li>
                </ul>
            </nav>
            <!-- /.inner -->
        </div>
    </header>
    <!-- </div> -->

    <div class="container">
        <div class="group-info">
            <h2>高圧ガスや溶接材料、機械、工具などの販売「機器・溶材部門」</h2>
            <p>当社の主力商品である高圧ガスは、自動車、造船、建設業などに金属の溶接・切断用、医療現場における吸入酸素や麻酔用、食品産業において酸化防止用、農作物の成長促進用など多種多様な用途に用いられており、それぞれの分野へ供給しています。高圧ガス、溶接機・溶接材料、機械工具から様々な商品を販売しています。<br>こうした活動において、お客様よりお困りごとをよく耳にすることがあります。それは、生産過程における機器の故障です。その中でも天井クレーンや溶接機に関することが多く、当社ではそれらの修理に取り組むことにしました。それ以来、お客様から急な故障にも対応出来、喜んで頂いています。<br>また、溶接・機械加工などの製作を行っています。お客様の希望に出来るだけ沿った加工品を、弊社の協力会社の中から最適な業者を選定し、発注から納品までを管理致します。
            </p>

            <h2>機器・溶材部門 営業品目</h2>
            <p><img src="/img/h-about-photo2.jpg" class="group-info-img2"></p>
            <h3>各種医療用ガス・各種工業用ガス</h3>
            <p>・医療で使用される吸入酸素、医療用炭酸ガス、亜酸化窒素など<br>・工業用で使用される酸素ガス、炭酸ガス、窒素、アルゴンガスなど<br>・その他、分析用ガス、食品用ガスなど各種取り扱っております。</p>
            <h3>機械・工具</h3>
            <p>・バンドソー、発電機、コンプレッサ、天井クレーンなどの各種工作機械、運搬機器<br>・スパナ、ドライバー、モンキーなどの工具<br>・グラインダー、電気ドリルなどの電動工具<br>・皮手、溶接面、保護マスク、保護メガネなどの保護具</p>
            <h3>溶接機・溶接材料</h3>
            <p>・パナソニックやダイヘンのアーク溶接機、CO2溶接機、TIG溶接機、溶接ロボット<br>・KOBELCO, 日鉄住金などの溶接棒、ワイヤなどの溶接材料<br>・スパッタ止め、焼け取りなどのケミカル商品</p>
            <h3>製作加工品</h3>
            <p>・パレット、溝蓋、足場、パイプなど、溶接, 機械加工の製作物, 設備工事</p><br>
            <h3>その他</h3>
            <p>・消火器の点検・詰め替え</p><br><br>　＊上記は一例です。その他各種取扱商品がございますので、お気軽にお問い合わせください。

        </div>


        <div class="content">

            <h2>各事業のご紹介</h2>

            <div class="business-photo">
                <dl class="kiki">
                    <a href="/kiki/">
                        <dd class="photo-item"><img src="/img/h-about-photo2.jpg"></dd>
                        <dt>機器・溶材部門</dt>
                        <dd>産業用ガスを起点として、溶接材料・工具・機械・保護具などの販売や溶接機や天井クレーンの修理を、医療用ガスを起点として、吸入器、マスクなど、多数取り扱っております。
                        </dd>
                    </a>
                </dl>
                <dl class="denkou">
                    <a href="/denkou/">
                        <dd class="photo-item"><img src="/img/denkou.jpg"></dd>
                        <dt>電気工事部門</dt>
                        <dd>家庭用電気設備から工場・病院の高圧電気施設まで多岐にわたる工事・点検・保守・メンテナンスをご提供しております。
                        </dd>
                    </a>
                </dl>
                <dl class="fukusi">
                    <a href="/fukusi/">
                        <dd class="photo-item"><img src="/img/kurumaisu.jpg"></dd>
                        <dt>福祉用具の貸与・販売</dt>
                        <dd>介護福祉用具貸与・販売 介護用品のことなら「ライフサポート　あいの助」にお任せください！ 利用者様の立場に立ったご提案を心掛けています。
                        </dd>
                    </a>
                </dl>
            </div>
        </div>

        <article>
            <h2>猪木酸素が提供する「省エネ・コスト削減」事業のご紹介</h2>
            <div class="syouene_info">
                <p>お客様の施設まるごと様々な節電対策、CO2の削減や老朽設備の更新、無駄な電力使用の防止などエネルギーの使用効率の向上を目指して。私たち「猪木酸素の省エネ」がそれを実現します</p>
            </div>

            <div class="syouene_btn">
                <a class="btn-social-square btn-social-square--hatebu">
                    猪木酸素の<br>省エネ
                </a>
                <a class="btn-social-square btn-social-square--hatebu">
                    無料<br>省エネ診断
                </a>
                <a class="btn-social-square btn-social-square--hatebu">
                    補助金申請<br>サポート
                </a>
                <a class="btn-social-square btn-social-square--hatebu">よくある<br>質問
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
    <!-- <script>
        $(document).ready(function() {
            $('.slider').bxSlider({
                auto: true,
                pager: false,
                controls: false,
                //mode: fade,
                pause: 5000,
                speed: 2000,
            });
        });
    </script> -->

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