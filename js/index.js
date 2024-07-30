$(document).ready(function() {
    // スムーススクロール
    $('nav a').on('click', function(event) {
        event.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 800);
    });

    // フォームバリデーション
    $('form').on('submit', function(event) {
        var isValid = true;

        // 必須項目チェック
        $(this).find('input[required]').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).css('border', '2px solid red');
            } else {
                $(this).css('border', '');
            }
        });

        // メールアドレスの形式チェック
        var email = $('#email').val();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            isValid = false;
            $('#email').css('border', '2px solid red');
        } else {
            $('#email').css('border', '');
        }

        // バリデーションが通らなかった場合、フォーム送信を停止
        if (!isValid) {
            event.preventDefault();
            alert('必須項目を入力してください。');
        }
    });
});