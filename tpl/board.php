<!DOCTYPE html>
<html lang="jn" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/curry_list.css">
  <title></title>
</head>

<body>
  <div id="container">

    <div id="header">
      <p class="top"><a href="index.php">トップページ</a></p>
      <h1>みんなのカレー</h1>
      <p class="image"><img src="img/curry.png"></p>
    </div>
    <div id="list_change">
      <p>並び替え</p>
      <table>
        <tr>
          <th><a href="./board.php?sort=new">新着順</a></th>
        </tr>
        <table>
          <tr>
            <th><a href="./board.php?sort=nice">いいね順</a></th>
          </tr>
        </table>
    </div>
    <div id="list">
      <p>カレー一覧</p>
      <div id="list_culomn">

        <?php foreach ($post_row as $val) : ?>
        <form action="#" method="post">
          <a href="./work_about.php?id=<?php echo $val['id'] ?>">
            <table>
              <tr>
                <td rowspan="2" class="curry_photo"><img src="img/curry_ko.png"></td>
                <td><?php echo $val['title'] ?>　投稿日時:<?php echo $val['post_date'] ?></td>
              </tr>
              <tr>
                <td><?php echo $val['name'] ?>　いいね:<?php echo $val['nice'] ?>こ　<button type="submit" name="nice" value="<?php echo $val['id'] ?>">いいね</button></td>
              </tr>
            </table>
          </a>
          </form>
        <?php endforeach ?>

      </div>
    </div>

  </div>
</body>

</html>