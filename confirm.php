<?php
// POSTデータを受け取り、変数に格納
$name = isset($_POST['name']) ? $_POST['name'] : 'データがありません';
$seat = isset($_POST['seat']) ? $_POST['seat'] : 'データがありません';
$email = isset($_POST['email']) ? $_POST['email'] : 'データがありません';
$phone = isset($_POST['phone']) ? $_POST['phone'] : 'データがありません';

// htmlspecialchars関数を使用してHTMLエスケープを行う
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$seat = htmlspecialchars($seat, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご確認ありがとうございます</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/confirm.css">
</head>
<body class="confirm">
    <?php include './php/header.php'; ?>  
    <div class="confirmation-container">
        <h1>お問い合わせ内容確認</h1>
        <form action="thanks.php" method="POST" class="confirm-form">
              <div class="confirmation-box">
                  <div class="field">
                       <strong>お名前</strong>
                             <span><?php echo htmlspecialchars($_POST['name']); ?></span>
                  </div>
                  <div class="field">
                      <strong>希望席</strong>
                             <span><?php echo htmlspecialchars($_POST['seat']); ?></span>
                  </div>
                  <div class="field">
                      <strong>メールアドレス</strong>
                             <span><?php echo htmlspecialchars($_POST['email']); ?></span>
                  </div>
                  <div class="field">
                      <strong>電話番号</strong>
                             <span><?php echo htmlspecialchars($_POST['phone']); ?></span>
                  </div>
                  <div class="button-container">
                       <button type="button" class="confirm-button" onclick="history.back()">戻る</button>
                             <input type="hidden" name="name" value="<?php echo $name; ?>">
                             <input type="hidden" name="seat" value="<?php echo $seat; ?>">
                             <input type="hidden" name="email" value="<?php echo $email; ?>">
                             <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                             <input type="submit" value="送信">
                  </div> 
             </div>
         </form>
    </div>
    <?php include './php/footer.php'; ?>
</body>
</html>
