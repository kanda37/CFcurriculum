<?php

session_start();

if(isset($_SESSION['error_message'])) {
    $error_message=$_SESSION['error_message'];
}

if(isset($_SESSION['input_data'])) {
    $data=$_SESSION['input_data'];
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-lesson3</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .button {
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        background-color: #007BFF;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .button:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <div class="header">
        <div class="header-left">Koyasu-portfolio</div>
        <a href="PHP-lessonSite.php" class="button">chapter4メニュー画面に戻る</a>
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
            <div class="form-title">お問い合わせ</div>
            <!-- この下にformタグでformの外側を作成 -->
            <form action="./PHP-lesson3-2-check.php" method="post" >
                <div class="form-item">名前</div>
                <!-- この下にinputタグでフォーム作成 -->
                <input type="text" name="name" value="<?php echo isset ($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : ""; ?>" />
                <span style = "color:red;" ><?php echo isset($error_message['name']) ? $error_message['name'] : ""; ?></span>

                <div class="form-item">メールアドレス</div>
                <!-- この下にinputタグでフォーム作成 -->
                <input type="text" name="mail" value="<?php echo isset ($_POST['mail']) ? htmlspecialchars($_POST['mail'], ENT_QUOTES) : ""; ?>" />
                <span style = "color:red;"><?php echo isset($error_message['mail']) ? $error_message['mail'] : ""; ?></span>
                

                <div class="form-item">電話番号</div>
                <!-- この下にinputタグでフォーム作成 -->
                <input type="text" name="phone" value="<?php echo isset ($_POST['phone']) ? htmlspecialchars($_POST['phone'], ENT_QUOTES) : ""; ?>" />
                <span style = "color:red;"><?php echo isset($error_message['phone']) ? $error_message['phone'] : ""; ?></span>
                

                <div class="form-item">内容</div>
                <!-- この下にtextareaタグでtaxtフォーム作成 -->
                <textarea name="body"><?php echo isset ($_POST['body']) ? htmlspecialchars($_POST['body'], ENT_QUOTES) : ""; ?></textarea>
                <span style = "color:red;"><?php echo isset($error_message['body']) ? $error_message['body'] : ""; ?></span>

                <div class="check">
                    <p class="btn">
                        <span><input type="submit" value="送信"></span>
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
