<?php
//写真情報配列
$photoDataArray = array(
   array(
      'image'  => 'http://localhost/table/01.jpg',
      'title'  => 'アンニョン',
      'locate' => '韓国',
      'date'   => '2022',
   ),
   array(
      'image'  => 'http://localhost/table/02.jpg',
      'title'  => 'スリザリン',
      'locate' => 'ホグワーツ城',
      'date'   => '2023/11/23',
   ),
   array(
      'image'  => 'http://localhost/table/03.jpg',
      'title'  => '六連タケミッチ',
      'locate' => 'ラウワン',
      'date'   => '2021',
   ),
);
?>

<html>

<head>
   <meta charset="UTF-8" />
</head>

<body>
   <table border="1" cellspacing="0">
      <tr>
         <th>タイトル</>
         <th>写真</>
         <th>撮影場所</>
         <th>撮影日時</>
      </tr>
      <?php
      foreach ($photoDataArray as $photoData) {
         echo ("<tr>");
         echo ("<td>${photoData['title']}</td>");
         echo ('<td><img src="' . $photoData['image'] . '" /></td>');
         echo ("<td>${photoData['locate']}</td>");
         echo ("<td>${photoData['date']}</td>");
         echo ("</tr>");
      }
      ?>
   </table>
</body>

</html>