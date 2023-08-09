<?php
session_start(); // セッションを開始

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company_name = sanitize($_POST['company_name']);
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $phone_number = sanitize($_POST['phone_number']);
    $message = sanitize($_POST['message']);
    $privacy_policy = sanitize($_POST['privacy_policy']);

    // Validate the data
    if (empty($company_name) || empty($name) || empty($email) || empty($phone_number) || empty($message) || empty($privacy_policy)) {
        $_SESSION['error'] = 'すべてのフィールドを記入してください。'; // エラーメッセージをセッションに保存
        header('Location: contact.php');
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = '正しいメールアドレスを入力してください。';
        header('Location: contact.php');
        exit;
    }

    // Additional server-side validation if needed

    // Send email
    $to = 'kanri@venice.jp';
    $subject = '企業HPより問い合わせ';
    $message = "会社名: $company_name\n\n氏名: $name\n\nメールアドレス: $email\n\n電話番号: $phone_number\n\nメッセージ: $message";
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        $_SESSION['success'] = 'メッセージが送信されました。担当より折り返しご連絡させていただきます。';
        header('Location: contact.php');
        exit;
    } else {
        $_SESSION['error'] = 'メッセージの送信に失敗しました。';
        header('Location: contact.php');
        exit;
    }
}

// サニタイズ関数
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
