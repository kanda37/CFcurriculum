<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2-5</title>
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

    /*。

     ブラックジャックのプログラムを作成し、相手、自分の点数を表示し、勝敗を出力して下さい。
     カードの追加はなしとし、自分と相手にランダムで２枚ずつのカードを配布し、勝敗を判定します。
     ****ルール****
     「カードの合計が21点」に近ければ勝利となります。
     ただし「カードの合計が21点」を超えてしまうと、その時点で負けとなります。
 
     【カードの数え方】
     ”2～9”まではそのままの数字、”10・J・Q・K”は「すべて10点」と数えます。
     また、”A”（エース）は「1点」もしくは「11点」のどちらに数えても構いません。
 
     【特別な役】
     最初に配られた2枚のカードが　”Aと10点札”　で21点が完成していた場合を『ブラックジャック』といい、その時点で勝ちとなります。
 
     [出力例]
     自分：18点　対戦相手：17点 　勝敗：あなたの勝ちです。
     自分：21点　対戦相手：20点　勝敗：ブラックジャック！あなたの勝ちです。
     自分：20点　対戦相手：20点　勝敗：引き分けです。
    */

    function blackJack()
    {
      // トランプカードを格納した配列、マークの考慮はなし
      $cards = ["A", "J", "Q", "K", 2, 3, 4, 5, 6, 7, 8, 9, 10];
      // 自分のカード
      $player = [];
      // 相手のカード
      $opponent = [];

      // カードを2枚配る
      $player[] = $cards[rand(0, 12)];
      $player[] = $cards[rand(0, 12)];

      // カードを2枚配る
      $opponent[] = $cards[rand(0, 12)];
      $opponent[] = $cards[rand(0, 12)];        
      
      echo 'プレイヤー1枚目：'.$player[0];
      echo "<br>";
      echo 'プレイヤー２枚目：'.$player[1];
      echo "<br>";

      echo '相手1枚目：'.$opponent[0];
      echo "<br>";
      echo '相手２枚目：'.$opponent[1];
      echo "<br>";

      // 得点計算
      $player_num = num_change($player[0]) + num_change($player[1]);

      $opponent_num = num_change($opponent[0]) + num_change($opponent[1]);

      echo '自分：'.$player_num.'点　';
      echo '対戦相手：'.$opponent_num.'点 　';
      echo '勝敗：';

      if ($player_num > $opponent_num) {

        if($player_num == 21) {
            echo 'ブラックジャック！';
        }

        echo 'あなたの勝ちです。';

      } elseif ($player_num == $opponent_num) {

        echo '引き分けです。';

      } else {

        echo 'あなたの負けです。';
      }

    }

    //この下に記述してください

    blackJack();

    // 文字を数値に変換
    function num_change($card) {

        if ($card <= 10) {
            return $card;
        }

        // カードがJ、Q,Kの場合
        if ((strcmp($card, 'J') == 0) || (strcmp($card, 'Q') == 0) || (strcmp($card, 'K') == 0) ) {
            return 10;
        }

        // カードがAの場合
        if (strcmp($card, 'A') == 0) {
            return 11;
        }
    }
    
    ?>
<div>
</body>
</html>