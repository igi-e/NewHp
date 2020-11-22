<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- レスポンシブの設定 -->
    <title>(有)猪木酸素玉島店</title>
    <link rel="stylesheet" href="css/humbager.css" media="screen and (max-width:640px)">

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"><!-- リセットcss：ブラウザの違いによる表示の違いをなくする -->
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet"><!-- google fontsを使う -->
    <link rel="stylesheet" href="css/small.css" media="screen and (max-width:480px)"><!--　画面サイズが480pxまでこのファイルのスタイルが適用される。 -->
    <link rel="stylesheet" href="css/medium.css" media="screen and (min-width:480px) and (max-width:1024px)"> <!-- 画面サイズ480pxから1024pxまではこのファイルのスタイルが適用される。 -->
    <link rel="stylesheet" href="css/wide.css" media="screen and (min-width:812px)"><!-- 画面サイズ1024px以上はこのファイルはスタイルが適用される。 -->
    <link href="css/style.css" rel="stylesheet"> <!-- レスポンシブにするため上の3行にした -->
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
                    <p><a class="button" href="mailform/">✉　お問い合わせ・<br>資料請求はこちら</a></p>
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

    <div class="container">
        <div class="fade-img">
            <img src="img\yousetu.jpg" alt="">
            <img src="img\iryou.jpg" alt="">
            <img src="img\hyousatu_repair.jpg" alt="">
            <img src="img\gaikan_naname.jpg" alt="">
        </div>

        <div class="content">

            <h2>事業内容【SERVICE】</h2>

            <div class="business-photo">
                <dl class="kiki">
                    <a href="kiki/">
                        <dd class="photo-item"><img src="img/h-about-photo2.jpg"></dd>
                        <dt>機器・溶材部門</dt>
                        <dd>産業用ガスを起点として、溶接材料・工具・機械・保護具などの販売や溶接機や天井クレーンの修理を、医療用ガスを起点として、吸入器、マスクなど、多数取り扱っております。
                        </dd>
                    </a>
                </dl>
                <dl class="denkou">
                    <a href="denkou/">
                        <dd class="photo-item"><img src="img/denkou.jpg"></dd>
                        <dt>電気工事部門</dt>
                        <dd>家庭用電気設備から工場・病院の高圧電気施設まで多岐にわたる工事・点検・保守・メンテナンスをご提供しております。
                        </dd>
                    </a>
                </dl>
                <dl class="fukusi">
                    <a href="fukusi/">
                        <dd class="photo-item"><img src="img/kurumaisu.jpg"></dd>
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
                <a class="btn-social-square btn-social-square--hatebu" href="syouene/">
                    猪木酸素の<br>省エネ
                </a>
                <a class="btn-social-square btn-social-square--hatebu" href="shindan/">
                    無料<br>省エネ診断
                </a>
                <a class="btn-social-square btn-social-square--hatebu" href="hojokin/">
                    補助金申請<br>サポート
                </a>
                <a class="btn-social-square btn-social-square--hatebu" href="question/">よくある<br>質問
                </a>
            </div>
        </article>

        <section class="news">
            <h2>お知らせ</h2>
            <div class="vertical-scroll-table">
                <table>
                    <tbody>
                        @foreach ($rss->channel->item as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td><a href="{{$item->link}}">（詳細）</td>
                            <td>{{date("Y年 n月 j日", strtotime($item->pubDate))}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <a name="map">
            <div class="map_honsya" <p>本社（機器・溶材部門、電気工事部門）</p>
                <map><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.132770844238!2d133.67856701522834!3d34.550193580473355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35515bac07ea4ba5%3A0xe5c8961188ef1b8a!2z44CSNzEzLTgxMDIg5bKh5bGx55yM5YCJ5pW35biC546J5bO277yR77yV77yZ77yZ4oiS77yV!5e0!3m2!1sja!2sjp!4v1598927013716!5m2!1sja!2sjp" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></map>
            </div>

            <div class="map_okayama">
                <p>岡山事業所（福祉用具部門）</p>
                <map><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.1228219345653!2d133.93139511457355!3d34.65160099335537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355407cdfd25786f%3A0x4e0d6ea8e062a7d6!2z44CSNzAzLTgyOTYg5bKh5bGx55yM5bKh5bGx5biC5Lit5Yy644GV44GP44KJ5L2P5bqn77yR77yQ4oiS77yR!5e0!3m2!1sja!2sjp!4v1605144651977!5m2!1sja!2sjp" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></map>
            </div>
        </a>

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