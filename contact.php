<?php
session_start(); // セッションを開始
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/favicon.ico">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/bg.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/sp.css">
    <title>株式会社VENICE 問い合わせ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <canvas id="canvas"></canvas>
        <figure class="v-logo-bg image-container rotate-scale-down">
            <img src="./images/v-logo.png" alt="">
        </figure>
        <div class="content">
            <header class="header">
                <div class="header-inner">
                    <a href="./index.html">
                        <figure class="header-logo">
                            <picture>
                                <img src="./images/header-logo.png" alt="">
                            </picture>
                        </figure>
                    </a>
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav class="globalMenuSp">
                        <ul class="gnavi">
                            <li class="nav-list"><a href="./index.html">TOP</a></li>
                            <li class="nav-list"><a href="./company.html">COMPANY</a></li>
                            <li class="nav-list"><a href="./index.html#members">MEMBERS</a></li>
                            <li class="nav-list"><a href="./recruit.html">RECRUIT</a></li>
                            <li class="nav-list"><a href="./contact.php">CONTACT</a></li>
                        </ul>
                    </nav>
                    <nav class="header-nav">
                        <ul class="gnavi">
                            <li class="nav-list"><a href="./index.html">TOP</a></li>
                            <li class="nav-list"><a href="./company.html">COMPANY</a></li>
                            <li class="nav-list"><a href="./index.html#members">MEMBERS</a></li>
                            <li class="nav-list"><a href="./recruit.html">RECRUIT</a></li>
                            <li class="nav-list"><a href="./contact.php">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <?php
            if (isset($_SESSION['error'])) {
                echo '<div class="error">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo '<div class="success">' . $_SESSION['success'] . '</div>';
                unset($_SESSION['success']);
            }
            ?>
            <div class="c-content">
                <h1 class="contact-form-title">お問い合わせフォーム</h1>
                <p class="contact-form-description">お問い合わせやご質問がございましたら、以下のフォームからお気軽にお問い合わせください。</p>

                <!-- ここに問い合わせフォームのHTMLコードを追加してください -->

                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="company_name">会社名<span class="required">必須</span></label>
                        <input type="text" id="company_name" name="company_name" placeholder="会社名を入力">
                    </div>

                    <div class="form-group">
                        <label for="name">氏名<span class="required">必須</span></label>
                        <input type="text" id="name" name="name" placeholder="お名前を入力">
                    </div>

                    <div class="form-group">
                        <label for="email">メールアドレス<span class="required">必須</span></label>
                        <input type="email" id="email" name="email" placeholder="メールアドレスを入力">
                    </div>

                    <div class="form-group">
                        <label for="phone_number">電話番号<span class="required">必須</span></label>
                        <input type="tel" id="phone_number" name="phone_number" placeholder="電話番号を入力">
                    </div>

                    <div class="form-group">
                        <label for="message">問い合わせ<span class="required">必須</span></label>
                        <textarea id="message" name="message" placeholder="メッセージを入力"></textarea>
                    </div>

                    <div class="privacy_policy form-group">
                        <input type="checkbox" id="privacy_policy" name="privacy_policy" value="accepted">
                        <label for="privacy_policy"><span><a href="./privacy_policy.html">プライバシーポリシー</a></span>に同意する</label>
                    </div>


                    <input type="submit" value="送信">
                </form>
            </div>
            <footer id="footer">
                <div class="footer-inner">
                    <div class="footer-up">
                        <nav class="footer-nav">
                            <ul class="gnavi">
                                <li class="nav-list"><a href="./index.html">Top</a></li>
                                <li class="nav-list"><a href="./company.html">Company</a></li>
                                <li class="nav-list"><a href="./index.html#members">Members</a></li>
                                <li class="nav-list"><a href="./recruit.html">Recruit</a></li>
                                <li class="nav-list"><a href="./privacy_policy.html">PrivacyPolicy</a></li>
                            </ul>
                        </nav>
                        <div class="footer-btn-contact">
                            <a href="./contact.php" class="ft-btn bgleft">
                                <img src="./images/icon-mail.png" alt="">
                                <span>お問い合わせ</span>
                            </a>
                        </div>
                    </div>
                    <div class="footer-dwn">
                        <div class="footer-info">
                            <div class="footer-info-l">
                                <ul>
                                    <li>株式会社ヴェニス</li>
                                    <li>
                                        &#12306 169-0075<br>
                                        東京都新宿区高田馬場2-8-5<br>
                                        ワシヤビル3B
                                    </li>
                                </ul>
                            </div>
                            <figure class="footer-venice">
                                <img src="./images/footer-venice.png" alt="">
                            </figure>
                        </div>
                        <div class="footer-contactinfo">
                            <div class="footer-info-r">
                                <ul>
                                    <li>CONTACT</li>
                                    <li>Tel. 03-6273-8951</li>
                                    <li>Fax. 03-6273-8952</li>
                                    <li>Mail. kanri@venice.jp</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="copyright">© VENICE Inc. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
    </div>

    <script src="./js/gradient.js"></script>
    <script src="./js/fadein.js"></script>
    <script>
        // V-LOGO-BG
        let last_known_scroll_position = 0;
        let ticking = false;

        function doSomething(scroll_pos) {
            const image = document.querySelector('.v-logo-bg img');
            image.style.transform = 'rotateY(' + scroll_pos + 'deg)';
        }

        window.addEventListener('scroll', function (e) {
            last_known_scroll_position = window.scrollY;

            if (!ticking) {
                window.requestAnimationFrame(function () {
                    doSomething(last_known_scroll_position);
                    ticking = false;
                });

                ticking = true;
            }
        });

        // BURGER
        document.addEventListener("DOMContentLoaded", function () {
            const hamburger = document.querySelector('.hamburger');
            const globalMenuSp = document.querySelector('.globalMenuSp');

            hamburger.addEventListener('click', function () {
                this.classList.toggle('active');
                if (this.classList.contains('active')) {
                    globalMenuSp.classList.add('active');
                } else {
                    globalMenuSp.classList.remove('active');
                }
            });
        });

    </script>
</body>

</html>