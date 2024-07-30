<!-- index.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>training__5</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include 'php/header.php'; ?>  
    <main>
        <section id="hero">
            <!-- Swiper -->
                <div class="swiper-container">
                     <div class="swiper-wrapper">
                     <div class="swiper-slide"><img src="path/to/image1.jpg" alt="Image 1"></div>
                     <div class="swiper-slide"><img src="path/to/image2.jpg" alt="Image 2"></div>
                     <div class="swiper-slide"><img src="path/to/image3.jpg" alt="Image 3"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
            <h2>今年も始まる夏祭り</h2>
        </section>

        <section id="schedule">
            <h2>スケジュール</h2>
            <!-- スケジュールの内容をここに追加 -->
        </section>

        <section id="access">
            <h2>アクセス</h2>
            <!-- Google Mapの埋め込み -->
            <iframe src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAPS_EMBED_LINK" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section id="reserve">
            <h2>席予約</h2>
            <form action="reserve_seat.php" method="post">
                <label for="name">名前:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="seats">予約席数:</label>
                <input type="number" id="seats" name="seats" required>
                <br>
                <label for="date">予約日:</label>
                <input type="date" id="date" name="date" required>
                <br>
                <label for="time">予約時間:</label>
                <input type="time" id="time" name="time" required>
                <br>
                <input type="submit" value="予約する">
            </form>
        </section>
    </main>

    <?php include 'php/footer.php'; ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/swiper.js"></script> 
</body>
</html>