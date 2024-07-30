<!-- confirm.php -->
<?php include 'header.php'; ?>

<main>
    <h2>確認ページ</h2>
    <p>入力した内容をご確認ください。</p>
    <div id="confirmation-content">
        <!-- 入力内容をここに表示 -->
    </div>
    <button onclick="window.history.back()">戻る</button>
    <button onclick="window.location.href='thanks.php'">送信</button>
</main>

<?php include 'footer.php'; ?>