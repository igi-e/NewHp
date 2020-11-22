
// =========================================
// ナビゲーションアイコン
// =========================================

// オーバーレイ作成
$('#contents').prepend('<div class="overlay"></div>');

// アイコンをクリックしたら
$('.navBtn').click(function() {
        $('header').toggleClass('navOpen'); // class付与/削除
        $('#wrap').toggleClass('fixed'); // コンテンツを固定/解除
        $('.overlay').toggle(); // オーバーレイ表示/非表示

        // スマホナビゲーションがヘッダーに被らないようにする
        var headerH = $('header').outerHeight();
        if ($('header').hasClass('navOpen')) {
                $('header nav').css('marginTop', headerH + 'px'); //ヘッダーの高さ分マージンを付ける
        }
});

// オーバーレイをクリックしたら
$('.overlay').click(function() {
        $(this).fadeOut(300); // オーバーレイ非表示
        $('header').removeClass('navOpen'); // class削除
        $('#wrap').removeClass('fixed'); // 固定解除
});