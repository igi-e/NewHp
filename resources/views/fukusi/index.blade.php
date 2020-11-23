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
            <h2>福祉部門（介護福祉用具貸与・販売・住宅改修）「あいの助」</h2>
            <p>弊社は「幸せ」をキーワードに、日々活動しています。利用者様やその家族、そして地域の方々が弊社の活動を通じて「幸せ」を感じて頂くことで、私たちも「幸せ」になれると考えています。経験豊富な「あいの助」スタッフが温かく支援致します！
            </p>

            <h2>取扱品目の一例</h2>

            <h3>▼福祉用具レンタル▼</h3>
            <table class="fukusi_hinmoku">
                <tr>
                    <td><img src=" \img\bed.jpg">
                    </td>
                    <td><img src="\img\kurumaisu-1.jpg"></td>
                    <td><img src="\img\hokouki.jpg"></td>
                    <td><img src="\img\tesuri.jpg"></td>
                </tr>
                <tr>
                    <td><img src="\img\hojobenza.jpg"></td>
                    <td><img src="\img\yokusou.jpg"></td>
                    <td><img src="\img\omutu.jpg"></td>
                    <td><img src="\img\maekake.jpg"></td>
                </tr>
            </table>

            <p>福祉用具のレンタル費用の負担額を軽減してくれるサービスです(自己負担1割)
                買うにはちょっと高すぎて手がでない、介護状態の変化に応じて毎回買うのは大変、買う前にちょっと使ってみたいといった時にご利用ください。
                どの介護状態の方が、どの福祉用具がレンタルできるかといった、詳しい情報については下記の【詳しくはこちらへ】をクリック頂き、取り扱い介護用品紹介をご覧ください。
            </p>

            <h3>▼福祉用具販売▼</h3>
            <p>特定福祉用具販売は介護保険を利用して該当する商品を年間１０万円まで１割購入する事ができます。５種類の特定福祉用具が販売の対象となります。<br>その他介護用品の販売：靴、杖、食器、エプロン、大人用紙オムツなど、様々な介護用品を取り扱いしております。</p>

            <div class="btn">
            <button type=“btn” onclick="location.href='http://hp.kaipoke.biz/3cu/index.html'">詳しくはこちらへ</button>
            </div>

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