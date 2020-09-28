<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(有)猪木酸素玉島店</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
</head>

<body>
    <div class="container">
        <header class="page-header wrapper">
            <div>
                <a href="index.blade.php">
                    <img class="logo" src="../../img/logo.jpg" alt="(有)猪木酸素玉島店"></a>
                <p class="tel">TEL:086-526-1212</p>
            </div>

            <nav>
                <ul class="main-nav">
                    <li><a href="/">HOME</a></li>
                    <li><a href="about/">私たちについて<br>about us</a></li>
                    <!--<a href="about/index.blade.php">ではない-->
                    <li><a href="service/">事業内容<br>service</a></li>
                    <li><a href="contact/">お問い合わせ<br>contact</a></li>
                    <li><a href="question/">よくある質問<br>question</a></li>
                    <li><a href="blog">ブログ<br>blog</a></li>
                    <li><a href="access/">アクセス<br>access</a></li>
                </ul>
            </nav>


        </header>

        <div class="fade-img">
            <img src="img\slide-title1.jpg" alt="">
            <img src="img\slide-title2.jpg" alt="">
            <img src="img\slide-title3.jpg" alt="">
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
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

        <div class="content">
            <p>昭和4年から倉敷市玉島において地域密着型のサービスを提供しています</p>
            <h2>各事業のご紹介</h2>

            <div class="business-photo">
                <dl class="kiki">
                    <img src="img/h-about-photo2.jpg">
                    <dt>機器・溶材部門</dt>
                    <dd>工場や病院に高圧ガスや機械・工具などを納入させて頂いています。</dd>
                </dl>
                <dl class="denkou">
                    <img src="img/h-about-photo1.jpg">
                    <dt>電気工事部門</dt>
                    <dd>工場からご家庭まで幅広く電気工事をやっています!!</dd>
                </dl>
                <dl class="syouene">
                    <img src="img/h-about-photo1.jpg">
                    <dt>省エネ部門</dt>
                    <dd>お客様の施設のエネルギー使用の効率化向上を目指して!<br>補助金のお手伝いもします!!</dd>
                </dl>
                <dl class="fukusi">
                    <img src="img/h-about-photo1.jpg">
                    <dt>福祉用具の貸与・販売</dt>
                    <dd></dd>
                </dl>
            </div>
        </div>
        <section class="news">
            <h2>お知らせ</h2>
        </section>
    </div>

    <footer>
        <div>
            <p><small>&copy; 2020 Igisanso</small></p>
        </div>
    </footer>

</body>

</html>