<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1-5</title>
</head>
<body>
<div class="m-5">
<button onclick="history.back()">chapter4メニュー画面に戻る</button>
    <?php
    /*
      課題：
        - 以下のコメントに従いコードを記述してください！
            ※各設問の回答の最後には改行を入れましょう。
            <br>タグをHTMLとして出力することで改行ができます。
        - このファイルをWebブラウザで開き、問題が無ければ保存して、このファイルを提出してください。
        dockerのlesoon4-phpコンテナを起動　→　http://localhost:8000/　にアクセス　→　該当のリンクをクリック　→　結果を確認
    */

    //何か一つ組み込み関数を使い、その結果をechoで出力してください！（組み込み関数は、何でもいいです。）
    
    // バイト数を取得

    $str = "Hello World!";

    $len = strlen($str);

    echo $len;

    echo "<br>";

    //二つの数値を引数として受け取り、それらの合計を返す関数addNumbersを作成してください。

    function addNumbers($first, $secnd) {

      return $first + $secnd;
    }
    echo "<br>";

    //文字列を引数として受け取り、その文字列が空でない場合はその文字列を、空の場合は"空の文字列"という文字列を返す関数checkStringを作成してください。

    function checkString ($str) {

      //文字列の空チェック
      if (empty($str)) {
        
        // 空の文字列を返却
        return "";

      } else {

        // 文字列を返却
        return $str;
      }
    }

    echo "<br>";

    // 配列を引数として受け取り、その配列の要素の数を返す関数countElementsを作成してください。

    function countElements(array $array) {

      return count($array);
    }

    echo "<br>";

    /*
      下記の$secretの文字列はシーザー暗号化されています。
      $arrayの配列の要素の数を関数を使い、取得し　https://dencode.com/ja/cipher/caesar　
      のエンコードのシフト部分に取得した数字を選び暗号を解いて答えをechoしてください！
    */
    $secret = "Ocvif tjp ajm tjpm cvmy rjmf nj avm! Cvqz v bjjy mzno! Fjtvnp";

    $array = array("apple", "banana", "cherry", "date", "elderberry");

    // 要素の数を取得
    $cnt = countElements($array);

    echo $cnt;

    echo "<br>";

    // 暗号の結果
    echo 'Thank you for your hard work so far! Have a good rest! Koyasu';

    ?>
<div>
</body>
</html>