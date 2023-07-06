<?php
session_start(); // セッションを開始
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="contact.css">
</head>
<body>
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
            <label for="privacy_policy">プライバシーポリシーに同意する</label>
        </div>
        
        <input type="submit" value="送信">
    </form>
</body>
</html>
