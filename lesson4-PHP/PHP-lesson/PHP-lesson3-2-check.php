<?php 
// ここに処理を記載
session_start();
// 直URL打ち込み禁止
if(!isset($_POST)||$_SERVER["REQUEST_METHOD"] !="POST") {
    header("location:./PHP-lesson3-1-form.php");
    exit();
}


$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8") : '';
$mail = isset($_POST["mail"]) ? htmlspecialchars($_POST["mail"], ENT_QUOTES, "UTF-8") : '';
$phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"], ENT_QUOTES, "UTF-8") : '';
$body = isset($_POST['body']) ? htmlspecialchars($_POST['body'], ENT_QUOTES, "UTF-8") : '';

// 未入力チェック
if(!empty($_POST)) {

    // 名前チェック
    if(empty($_POST["name"])) {
        $error_message["name"] = "名前を入力してください。";
    }

    // 電話番号チェック
    if(empty($_POST["phone"])) {

        $error_message["phone"] = "電話番号を入力してください。";
    
    }elseif(!is_numeric($_POST["phone"])) {

        $error_message["phone"] = "数値を入力してください。";
    }

    // メールアドレスチェック
    if(empty($_POST["mail"])) {

        $error_message["mail"] = "メールアドレスを入力してください";

    }elseif(!preg_match('/^[a-z0-9._+^~-]+@[a-z0-9.-]+$/i', $_POST['mail'])){

        $error_message["mail"] = "不正な形式のメールアドレスです。";
    }

    // お問い合わせ内容確認
    if(empty($_POST["body"])) {

        $error_message["body"] = "お問い合わせ内容を入力してください。";
    }
}

// エラー内容チェック--エラーの場合はPHP- lesson3-1-form.phpリダイレクト
if(!empty($error_message)) {
    $_SESSION['input_data']=$_POST;
    $_SESSION["error_message"]=$error_message;
    header("Location:./PHP-lesson3-1-form.php");
    exit();
}
// セッション破棄
session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confilm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <div class="header-left">Koyasu-portfolio</div>
        <div class="header-right">
            <ul class="list">
                <li>home</li>
                <li>portfolio</li>
                <li class="nowpage">contact</li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="contact-form">
            <div class="form-title">お問い合わせ確認</div>
            <!-- この下にformタグでformの外側を作成 -->
            <form action="PHP-lesson3-3-success.php" method="post" >
                <div class="form-item">名前</div>
                <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>

                <div class="form-item">メールアドレス</div>
                <?php echo htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?>

                <div class="form-item">電話番号</div>
                <?php echo htmlspecialchars($phone, ENT_QUOTES, "UTF-8"); ?>
                
                <div class="form-item">内容</div>
                <?php echo htmlspecialchars($body, ENT_QUOTES, "UTF-8"); ?>
              
                <div class="check">
                    <p class="btn">
                        <span> 
                            <input type="submit" value="送信" onClick="">
                        </span>
                    </p>
                </div>
            </form>
            <form method="post" action="PHP-lesson3-1-form.php">
                <div class="box_check">
                    <p class="btn">
                        <span>
                            <input type="submit" value="戻る" onClick="" >
                        </span>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="footer-left">
            <ul class="list">
                <li>home</li>
                <li>portfolio</li>
                <li class="nowpage">contact</li>
            </ul>
        </div>
    </div>
</body>
</html>