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

    <div class="container">
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
                        <li><a href="">私たちについて [ABOUT US]</a></li>
                        <li><a href="service/">事業内容 [SERVICE]</a></li>
                        <li><a href="blog/">ブログ [BLOG]</a></li>
                    </ul>
                </nav>
                <!-- /.inner -->
            </div>
        </header>

        <div class="about">
            <h2>私たちについて</h2>
            <p>当社は、昭和４年に猪木酸素店として倉敷市玉島に創業して以来、各種類の高圧ガスを、安全にかつ迅速にお客様にお届けしております。<br>
            その日々の訪問で、お客様から機器の故障のお困りごとをよく聞きます。中でも天井クレーンや溶接機に関することが多いため、当社ではそれらの修理に取り組むことにしました。それ以来、お客様から急な故障にも対応することが出来、喜んで頂いています。<br>
            さらに、頻繁にお客様の工場周辺を回っている弊社ならば電気工事の相談や依頼をしやすく、よりお客様のお役に立てるのではないかと思い、電気工事業を始めることにしました。ちょっとした工事から10人程度必要な大掛かりな工事にも対応しております。<br>
            また、弊社とご関係のある医療福祉施設の方より福祉用具の販売・貸与のお話を頂きました。創業以来、医療をサポートしている弊社が出来る高齢社会への貢献を考え、福祉用具の販売・貸与業を2018年12月より始めました。 経験豊富なスタッフが利用者様の立場に立ったご提案を心掛けています。<br><br>
            お客様の抱える問題・課題を解決するため、その要望・要求を満たすことができる製品やサービスを提案し導入して頂くことで、顧客に喜ばれ、頼りにされる企業を目指しています。
            </p>

        </div>

        <div class="gaiyou">
            <h2>会社概要</h2>
            <table>
                <tr>
                    <td>会社名</td>
                    <td>有限会社猪木酸素玉島店</td>
                </tr>
                <tr>
                    <td>所在地</td>
                    <td>本社（機器・溶材部門、電気工事部門）：岡山県倉敷市玉島1599-5<br>岡山事業所（福祉用具部門）：岡山県岡山市中区さくら住座10-1　岡山博愛会　在宅総合支援センター　アリス内</td>
                </tr>
                <tr>
                    <td>電話</td>
                    <td>本社：086-526-1212<br>岡山事業所：086-238-6808</td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td>postmaster@igisanso.com</td>
                </tr>
                <tr>
                    <td>代表者</td>
                    <td>代表取締役　猪木　栄作</td>
                </tr>
                <tr>
                    <td>創業・創立</td>
                    <td>創業：1929年　・　創立：1968年12月24日</td>
                </tr>
                <tr>
                    <td>資本金</td>
                    <td>500万円</td>
                </tr>
                <tr>
                    <td>従業員数</td>
                    <td>役員2名、従業員12名</td>
                </tr>
                <tr>
                    <td>事業内容</td>
                    <td>高圧ガス・溶接材料・機械・工具、・保護具などの販売、<br>溶接機・天井クレーンなどの修理、消火器の点検<br>電気設備の工事・保守・点検、省エネ支援、<br>福祉用具の販売・貸与、住宅改修</td>
                </tr>
            </table>

            <h2>沿革</h2>
            <table>
                <tr>
                    <td>昭和 4年 6月 1日</td>
                    <td>猪木酸素店として創業</td>
                </tr>
                <tr>
                    <td>昭和31年 3月 1日</td>
                    <td>会社登記：有限会社猪木酸素店設立</td>
                </tr>
                <tr>
                    <td>昭和43年12月24日</td>
                    <td>会社変更登記：有限会社猪木酸素玉島店設立</td>
                </tr>
                <tr>
                    <td>平成28年</td>
                    <td>電気工事業開始</td>
                </tr>
                <tr>
                    <td>平成29年12月1日</td>
                    <td>福祉用具の販売・貸与業開始</td>
                </tr>
            </table>

            <picture>
                <li><img src="..\img\gaikan_naname.jpg"><br>本社（機器・溶材部門、電気工事部門）</li>
                <li><img src="..\img\hakuaikai _1.jpg"><br>岡山事業所（福祉用具部門）</li>
            </picture>

            <div class="map_honsya" <p>本社（機器・溶材部門、電気工事部門）</p>
                <map><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.132770844238!2d133.67856701522834!3d34.550193580473355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35515bac07ea4ba5%3A0xe5c8961188ef1b8a!2z44CSNzEzLTgxMDIg5bKh5bGx55yM5YCJ5pW35biC546J5bO277yR77yV77yZ77yZ4oiS77yV!5e0!3m2!1sja!2sjp!4v1598927013716!5m2!1sja!2sjp" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></map>
            </div>

            <div class="map_okayama">
                <p>岡山事業所（福祉用具部門）</p>
                <map><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.1228219345653!2d133.93139511457355!3d34.65160099335537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355407cdfd25786f%3A0x4e0d6ea8e062a7d6!2z44CSNzAzLTgyOTYg5bKh5bGx55yM5bKh5bGx5biC5Lit5Yy644GV44GP44KJ5L2P5bqn77yR77yQ4oiS77yR!5e0!3m2!1sja!2sjp!4v1605144651977!5m2!1sja!2sjp" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></map>
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