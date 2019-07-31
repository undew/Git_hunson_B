<!DOCTYPE html>
<html lang="jn" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/work_about.css">
  <script src="./js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/query_result.js"></script>
  <title></title>
</head>

<body>
  <div id="container">
    <div id="header">
      <p><a href="board.php?sort=new">カレー一覧へもどる</a></p>
    </div>
    <div id="result_image">
      <div id="curry_image">
        <p><img src="./img/curry.png"></p>
      </div>
    </div>
    <div id="description">
      <h1>コメント欄</h1>
      <?php foreach ($reply_row as $reply_val) : ?>
        <table>
          <tr>
            <td><?php echo $reply_val['id'] ?></td>
            <td><?php echo $reply_val['name'] ?></td>
            <td><?php echo $reply_val['post_date'] ?></td>
          </tr>
          <tr>
            <td colspan="3"><?php echo $reply_val['msg'] ?></td>
          </tr>
        </table>
      <?php endforeach ?>
    </div>
    <div class="board_table">
      <form action="#" method="post">
        <table>
          <tr>
            <td>ニックネーム</td>
            <td><input type="text" name="name" value=""></td>
          </tr>
          <tr>
            <td>コメント</td>
            <td><input type="text" name="msg" value=""></td>
          </tr>
          <tr>
            <th colspan="2" class="button_submit"><button type="submit">コメント！</button></th>
          </tr>
        </table>
      </form>
    </div>
    <div id="title">
      <p class="title_name"><?php echo $post_row[0]['name'] ?></p>
      <p class="title_info"><?php echo $main[0]['name'] ?>・・・<?php echo $main[0]['little_description'] ?><br><?php echo $taste[0]['name'] ?>・・・<?php echo $taste[0]['little_description'] ?><br><?php echo $flavor[0]['name'] ?>・・・<?php echo $flavor[0]['little_description'] ?><br><?php echo $taste[0]['name'] ?>・・・<?php echo $taste[0]['little_description'] ?><br><?php echo $hot_taste[0]['name'] ?>・・・<?php echo $hot_taste[0]['little_description'] ?></p>
    </div>
  </div>
</body>

</html>
