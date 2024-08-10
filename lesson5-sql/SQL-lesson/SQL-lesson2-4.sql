/*
  課題：
    - 以下のコメントに従いコードを記述してください！
    - 課題が出来次第、保存して、このファイルを提出してください。
    dockerのlesoon5-phpコンテナを起動　→　DBeaver　実行して結果を確認
    
  ジャンルごとの本の平均評価が3点以下であるジャンルを表示するSQLを以下に書いてください。

  (取得結果イメージ)
  +---------+---------------+
  | genre   | average_score |
  +---------+---------------+
*/

SELECT
	genre,
	AVG(Score) as average_score
FROM
	Books
INNER JOIN Reviews ON
	Books.ID = Reviews.BookID
WHERE 
    3 >= (SELECT AVG(score) FROM Reviews)
GROUP BY
	genre ;
