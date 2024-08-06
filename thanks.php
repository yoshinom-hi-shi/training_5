<?php
// このファイルは、フォーム送信後にリダイレクトされるサンクスページ
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご確認ありがとうございます</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        main {
            color: black;
            display: flex;
            font-size: 28px;
            font-weight: bold;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100px;
            margin: 0;
            margin-top: 70px;
        }
    </style>
</head>
<body>
<?php include './php/header.php'; ?>  
    
    <main>
        <section>
            <p>お問い合わせありがとうございました</p>
        </section>
    </main>

    <?php include './php/footer.php'; ?>
</body>
</html>