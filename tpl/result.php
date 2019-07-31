<!DOCTYPE html>
<html lang="jn" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/curry_result.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/query_result.js"></script>
    <title></title>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>結果発表</h1>
      </div>
      <div id="result_image">
        <div id="curry_image">
          <p><img src="img/<?php echo $img;?>"></p>
        </div>
        <div id="color_image">
          <p class="color">　</p>
        </div>
      </div>
      <div id="description">
        <h1>これがあなたのカレーです！</h1>
        <table>
          <tr>
            <td>主食名</td><td><?php echo $rows[0]['name']; ?></td>
          </tr>
          <tr>
            <td>味名</td><td><?php echo $rows[1]['name']; ?></td>
          </tr>
          <tr>
            <td>旨味名</td><td><?php echo $rows[2]['name']; ?></td>
          </tr>
          <tr>
            <td>辛味名</td><td><?php echo $rows[3]['name']; ?></td>
          </tr>
        </table>
      </div>
      <div id="board_form">
        <p class="board_click">投稿しよう！</p>
        <form action="" method="post">
          <input type="hidden" name="staple_food" value="<?php echo $input['staple_food'];?>">
          <input type="hidden" name="taste" value="<?php echo $input['taste'];?>">
          <input type="hidden" name="smell" value="<?php echo $input['smell'];?>">
          <input type="hidden" name="spiciness" value="<?php echo $input['spiciness'];?>">
          <table class="board_table">
            <tr>
              <td>ニックネーム</td><td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
              <td>カレーの題名</td><td><input type="text" name="title" value=""></td>
            </tr>
            <tr>
              <th colspan="2" class="button_submit"><button type="submit" name="write" value="w">投稿！</button></th>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
