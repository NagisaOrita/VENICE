<?php
session_start(); // セッションを開始

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['company_name'], $_POST['name'], $_POST['email'], $_POST['phone_number'], $_POST['message'], $_POST['privacy_policy'])) {
        $company_name = $_POST['company_name'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $message = $_POST['message'];
        $privacy_policy = $_POST['privacy_policy'];

        // Validate the data
        if (empty($company_name) || empty($name) || empty($email) || empty($phone_number) || empty($message) || empty($privacy_policy)) {
            $_SESSION['error'] = 'すべてのフィールドを記入してください。'; // エラーメッセージをセッションに保存
            header('Location: contact.php');
            exit;
        } else {
            // Send email
            $to = 'tuallysret@gmail.com';
            $subject = '企業HPより問い合わせ';
            $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers)) {
                $_SESSION['success'] = 'メッセージが送信されました。';
                header('Location: contact.php');
                exit;
            } else {
                $_SESSION['error'] = 'メッセージの送信に失敗しました。';
                header('Location: contact.php');
                exit;
            }
        }
    } else {
        $_SESSION['error'] = 'すべてのフィールドを記入してください。';
        header('Location: contact.php');
        exit;
    }
}
?>