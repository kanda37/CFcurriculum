<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2-2</title>
    <link rel="stylesheet" href="style.css">
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
    /*  
       お釣りの計算プログラムを作成して下さい。
        所持金は2万円札とし、1円以上の任意の値段を設定した商品を購入した際のおつり（内訳）を
        出力して下さい。
        使用するお金は五千円札、千円札、500円玉、100円玉、50円玉、10円玉、5円玉、1円玉、とします。
    
        出力例
        商品の値段：4000円

        おつり内訳
        五千円札　１枚
        千円札　１枚
    */

    //この下に記述してください

    $purchase = 20000;   // 支払い金額
    $product = 7357; // 購入金額

    function calc($purchase, $product){

        $money = [5000,1000,500,100,50,10,5,1];
        // おつり
        $change = $purchase-$product;
        $result = [];
        if ($change < 0) {
          return $change = $change * -1;
        }
        foreach ($money as $value) {
        
          // お釣りが0円以下になる場合
          if($change <= 0){
            $result[$value] = 0;
          }else{

            $page = floor($change/$value);
            $result[$value] = $page; 
            $change -= ($page*$value);
          }
        }
        return $result;
      }


    $change_arr = calc($purchase, $product);

    echo '商品の値段：'.$product;
    echo "<br>";
    echo 'おつり内訳';
    echo "<br>";

    // 5000円札
    if ($change_arr[5000] != 0) {
        echo '五千円札　'.$change_arr[5000].'枚';
        echo "<br>";
    }

    // 1000円札
    if ($change_arr[1000] != 0) {
        echo '千円札　'.$change_arr[1000].'枚';
        echo "<br>";
    }

    // 500円
    if ($change_arr[500] != 0) {
        echo '五百円玉　'.$change_arr[500].'枚';
        echo "<br>";
    }

    // 100円
    if ($change_arr[100] != 0) {

        echo '百円玉　'.$change_arr[100].'枚';
        echo "<br>";
    }

    // 50円
    if ($change_arr[50] != 0) {

        echo '五十円玉　'.$change_arr[100].'枚';
        echo "<br>";
    }

    // 10円
    if ($change_arr[10] != 0) {
        echo '十円玉　'.$change_arr[10].'枚';
        echo "<br>";
    }

    // 1円
    if ($change_arr[5] != 0) {
        echo '五円玉　'.$change_arr[5].'枚';
        echo "<br>";
    }

    if ($change_arr[1] != 0) {
        echo '一円玉　'.$change_arr[1].'枚';
        echo "<br>";
    }
    
?>
<div>
</body>
</html>