<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>training__5</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include './php/header.php'; ?>  

        <nav class="hamburger-menu" id="navigation">
             <a href="#schedule" id="mobile_schedule_link" class="top-border">スケジュール</a>
             <a href="#access" id="mobile_access_link" class="top-border">アクセス</a>
             <a href="#reserve" id="mobile_reserve" class="top-bottom-border">席予約</a>
        </nav>

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/slide_1.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="./img/slide_2.jpg" alt="Image 2"></div>
                <div class="swiper-slide"><img src="./img/slide_3.jpg" alt="Image 3"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    <!-- キャッチコピー -->
    <section id="catch_copy">
        <h2>今年も始まる<span class="font_red">夏祭り</span></h2>
    </section>

    <section id="schedule">
        <h2>スケジュール</h2>
             <div class="tags">
                 <a href="#" class="tag tag_one active" data-service="one">９月１日</a>
                 <a href="#" class="tag tag_two" data-service="two">９月２日</a>
                 <a href="#" class="tag tag_three" data-service="three">９月３日</a>
             </div>
             <div class="schedule_description">
                 <div id="one" class="schedule_box active">
                     <p>9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p>
                </div>
                <div id="two" class="schedule_box">
                     <p>9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p>
                </div>
                <div id="three" class="schedule_box">
                     <p>9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p>
                </div>
            </div>
    </section>

    <section id="access">
        <h2>アクセス</h2>
            <p>〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
        <!-- Google Mapの埋め込み -->
        <div class="map_container"><iframe class="map_iframe" src="https://maps.app.goo.gl/dZqgQ8DXhuDREhAc8" sandbox="allow-top-navigation"></iframe></div>
    </section>

    <section id="reserve">
        <h2>席予約</h2>
            <form id="contact_form" action="confirm.php" method="post">
                 <label for="name">お名前: <span class="required">*必須</span><input type="text" name="name" required placeholder="例）田中太郎"></label>
                 <label for="seat">席の場所: <span class="required">*必須</span>
                     <select id="seat" name="seat" required>
                         <option value="">---</option>
                         <option value="ss">SS</option>
                         <option value="s">S</option>
                         <option value="a">A</option>
                         <option value="b">B</option>
                         <option value="c">C</option>
                      </select>
                </label>
                <label for="email">メールアドレス: <span class="required">*必須</span><input type="email" name="email" required placeholder="例）abcd1234@example.com"></label>
                <label for="phone">電話番号: <span class="optional">※任意</span><input type="tel" name="phone" placeholder="例）09012345678"></label>
                <button type="submit" id="submitBtn" disabled>送信</button>
            </form>
           <div id="errorMessage" class="error-message"></div>
    </section>

    <?php include './php/footer.php'; ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>