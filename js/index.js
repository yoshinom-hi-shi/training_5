$(document).ready(function() {
    // 固定ヘッダーの高さを取得
    var headerHeight = $('header').outerHeight(); // ヘッダーのセレクターを適宜変更

    // ナビゲーションリンクをクリックしたときのスムーススクロール処理
    $('a[href^="#"]').click(function(event) {
        event.preventDefault();
        var speed = 1000;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        
        // スクロール位置に追加のオフセットを加える（例：10px）
        var position = target.offset().top - headerHeight - 20; // 追加のオフセットを調整

        $('html,body').animate({scrollTop: position}, speed, 'swing');
        
        // メニューが開いている場合、閉じる
        if ($('.hamburger').hasClass('is-active')) {
            $('.hamburger').removeClass('is-active');
            $('.hamburger-menu').slideUp();
        }
        return false;
    });

    $('.tag').click(function(event) {
        event.preventDefault();  // デフォルトのクリック動作を防止
    
        var scheduleBox = $(this).data('service');  // クリックされたタグの関連データを取得
        $('.schedule_box').removeClass('active').css("opacity", 0).slideUp(500);  // 全てのボックスを非表示に
        $('#' + scheduleBox).addClass('active').css('opacity', 1).slideDown(500);  // 関連するボックスを表示
        $('.tag').removeClass('active');  // 全てのタグからactiveクラスを削除
        $(this).addClass('active');  // クリックされたタグにactiveクラスを追加
    });

    // ハンバーガーメニューの開閉処理
    $('.hamburger').click(function() {
        $(this).toggleClass('is-active');
        $('.hamburger-menu').slideToggle();
    });

    // バリデーション
    const $submitBtn = $('#submitBtn');
    const $form = $('#reserveForm');
    const $errorMessage = $('#errorMessage');

    const validateForm = () => {
        let isValid = true;
        $errorMessage.text('');
        $form.find('input, select').each(function() {
            if ($(this).prop('required') && !$(this).val()) {
                isValid = false;
                $errorMessage.text('全ての必須項目を入力してください。');
                return false; // ループを停止
            }
        });

        // メールアドレスのバリデーション
        const email = $('#email').val();
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (email && !emailPattern.test(email)) {
            isValid = false;
            $errorMessage.text('有効なメールアドレスを入力してください。');
        }

        // 電話番号のバリデーション
        const phone = $('#phone').val();
        const phonePattern = /^[0-9]{10,11}$/;
        if (phone && !phonePattern.test(phone)) {
            isValid = false;
            $errorMessage.text('有効な電話番号を入力してください。');
        }

        if (isValid) {
            $submitBtn.prop('disabled', false).addClass('enabled');
        } else {
            $submitBtn.prop('disabled', true).removeClass('enabled');
        }
    };

    // 入力フィールドの変更を監視
    $form.find('input, select').on('input change', validateForm);

    // フォーム送信時の確認
    $form.on('submit', function(e) {
        if ($submitBtn.prop('disabled')) {
            e.preventDefault();
        }
    });

    validateForm(); // 初期ロード時のバリデーションチェック

    window.onload = function() {
        // Swiperの初期化
        var mySwiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true, // ページネーションをクリック可能にする
            },
            autoplay: false,
            loop: false,
            speed: 500,
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: true,
        });
    
        // 手動操作のボタンをクリックしたときの処理
        $('.swiper-button-next').on('click', function() {
            mySwiper.slideNext();
        });
    
        $('.swiper-button-prev').on('click', function() {
            mySwiper.slidePrev();
        });
    };
});