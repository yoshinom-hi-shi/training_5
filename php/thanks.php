<?php
// このファイルは、フォーム送信後にリダイレクトされるサンクスページです。
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご確認ありがとうございます</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header style="background-color: #BEA574; font-size: 16px;">
        <a href="index.php">
            <img src="path/to/logo.png" alt="ロゴ" style="width: 100px;">
        </a>
        <nav>
            <ul>
                <li><a href="#schedule">スケジュール</a></li>
                <li><a href="#access">アクセス</a></li>
                <li><a href="#tickets">席予約</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h1>ありがとうございました！</h1>
            <p>ご予約いただきありがとうございます。送信内容を確認し、登録が完了しました。</p>
            <p>ご不明点がある場合は、<a href="contact.php">お問い合わせ</a>ページからご連絡ください。</p>
            <a href="index.php">トップページに戻る</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2022 STOCKSUN INC.</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>