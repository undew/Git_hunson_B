<!DOCTYPE html>
<html lang="jn" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/top.css">
  <link rel="stylesheet" href="css/first.css">
  <link rel="stylesheet" href="css/second.css">
  <link rel="stylesheet" href="css/third.css">
  <link rel="stylesheet" href="css/four.css">
  <link rel="stylesheet" href="css/result.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/query.js"></script>
  <title></title>
</head>

<body>
  <form action="./result.php" method="post">
    <div id="container">
      <div id="top">

        <h1 class="top_title">カレーを作ろう！</h1>
        <p class="top_title"><a href="#first">START</a></p>
        <p class="bottom_title"><a href="board.php">掲示板</a></p>
        <img src="img/curry.png" class="img_top">
      </div>
      <div id="first">

        <h1>主食を選ぼう</h1>
        <h3 class="first_h3"><img src="img/curry_ko.png" class="img_first"></h3>
        <table>
          <tr>
            <td class="click_first"><label id="lavel1"><input type="radio" name="staple_food" value="10"><?php echo $main_row[0]['name'] ?></label></td>
          </tr>
          <tr>
            <td class="click_first"><label id="lavel2"><input type="radio" name="staple_food" value="11"><?php echo $main_row[1]['name'] ?></label></td>
          </tr>
          <tr>
            <td class="click_first"><label id="lavel3"><input type="radio" name="staple_food" value="12"><?php echo $main_row[2]['name'] ?></label></td>
          </tr>

        </table>
        <p class="cursol_first"><a href="#second">▷</a></p>
        <p class="first_board"></p>
        <p class="first_message"></p>

        <input type="hidden" id="m1n" value="<?php echo $main_row[0]['name'] ?>">
        <input type="hidden" id="m2n" value="<?php echo $main_row[1]['name'] ?>">
        <input type="hidden" id="m3n" value="<?php echo $main_row[2]['name'] ?>">
        <input type="hidden" id="m1m" value="<?php echo $main_row[0]['description'] ?>">
        <input type="hidden" id="m2m" value="<?php echo $main_row[1]['description'] ?>">
        <input type="hidden" id="m3m" value="<?php echo $main_row[2]['description'] ?>">
      </div>

      <!--                                あじについて　　　　　　　　　　　　　　 -->

      <div id="second">
        <h1>味を決めるスパイスを選ぼう</h1>
        <h3 class="second_h3"><img src="img/curry_ko.png" class="img_second"></h3>
        <table>
          <tr>
            <td class="click_second"><label id="lavel4"><input type="radio" name="taste" value="1"><?php echo $taste_row[0]['name'] ?></label></td>
          </tr>
          <tr>
            <td class="click_second"><label id="lavel5"><input type="radio" name="taste" value="2"><?php echo $taste_row[1]['name'] ?></label></td>
          </tr>
          <tr>
            <td class="click_second"><label id="lavel6"><input type="radio" name="taste" value="3"><?php echo $taste_row[2]['name'] ?></label></td>
          </tr>

        </table>
        <p class="cursolback_second"><a href="#first">◁</a></p>
        <p class="cursol_second"><a href="#third">▷</a></p>
        <p class="second_board"></p>
        <p class="second_message"></p>

        <input type="hidden" id="t1n" value="<?php echo $taste_row[0]['name'] ?>">
        <input type="hidden" id="t2n" value="<?php echo $taste_row[1]['name'] ?>">
        <input type="hidden" id="t3n" value="<?php echo $taste_row[2]['name'] ?>">
        <input type="hidden" id="t1m" value="<?php echo $taste_row[0]['description'] ?>">
        <input type="hidden" id="t2m" value="<?php echo $taste_row[1]['description'] ?>">
        <input type="hidden" id="t3m" value="<?php echo $taste_row[2]['description'] ?>">
      </div>

      <!-- 　　　　　　　　　　　　　　　　　旨味について                            -->

      <div id="third">

        <h1>旨味を決めるスパイスを選ぼう</h1>
        <h3 class="third_h3"><img src="img/curry_ko.png" class="img_third"></h3>
        <table>
          <tr>
            <td class="click_third"><label id="lavel7"><input type="radio" name="smell" value="4"><?php echo $flavor_row[0]['name'] ?></label></td>
          </tr>
          <tr>
            <td class="click_third"><label id="lavel8"><input type="radio" name="smell" value="5"><?php echo $flavor_row[1]['name'] ?></label></td>
          </tr>
          <tr>
            <td class="click_third"><label id="lavel9"><input type="radio" name="smell" value="6"><?php echo $flavor_row[2]['name'] ?></label></td>
          </tr>

        </table>
        <p class="cursolback_third"><a href="#second">◁</a></p>
        <p class="cursol_third"><a href="#four">▷</a></p>
        <p class="third_board"></p>
        <p class="third_message"></p>

        <input type="hidden" id="f1n" value="<?php echo $flavor_row[0]['name'] ?>">
        <input type="hidden" id="f2n" value="<?php echo $flavor_row[1]['name'] ?>">
        <input type="hidden" id="f3n" value="<?php echo $flavor_row[2]['name'] ?>">
        <input type="hidden" id="f1m" value="<?php echo $flavor_row[0]['description'] ?>">
        <input type="hidden" id="f2m" value="<?php echo $flavor_row[1]['description'] ?>">
        <input type="hidden" id="f3m" value="<?php echo $flavor_row[2]['description'] ?>">

      </div>
      <div id="four">

        <h1>辛味を決めるスパイスを選ぼう</h1>
        <h3 class="four_h3"><img src="img/curry_ko.png" class="img_four"></h3>
        <table>
          <tr>
            <td class="click_four"><label id="lavel10"><input type="radio" name="spiciness" value="7"><?php echo $hot_taste_row[0]['name'] ?></label></td>
          </tr>
          <tr>
            <td class="click_four"><label id="lavel11"><input type="radio" name="spiciness" value="8"><?php echo $hot_taste_row[1]['name'] ?></label></td>
          </tr>
          <tr>
            <td class="click_four"><label id="lavel12"><input type="radio" name="spiciness" value="9"><?php echo $hot_taste_row[2]['name'] ?></label></td>
          </tr>

        </table>
        <p class="cursolback_four"><a href="#third">◁</a></p>
        <p class="cursol_four"><a href="#result">▷</a></p>
        <p class="four_board"></p>
        <p class="four_message"></p>

        <input type="hidden" id="ht1n" value="<?php echo $hot_taste_row[0]['name'] ?>">
        <input type="hidden" id="ht2n" value="<?php echo $hot_taste_row[1]['name'] ?>">
        <input type="hidden" id="ht3n" value="<?php echo $hot_taste_row[2]['name'] ?>">
        <input type="hidden" id="ht1m" value="<?php echo $hot_taste_row[0]['description'] ?>">
        <input type="hidden" id="ht2m" value="<?php echo $hot_taste_row[1]['description'] ?>">
        <input type="hidden" id="ht3m" value="<?php echo $hot_taste_row[2]['description'] ?>">

      </div>
      <div id="result">
        <p class="cursolback_reslut"><a href="#four">◁</a></p>
        <h1>あなたの作ったカレーは・・・</h1>
        <!-- <p class="curry_result"><a href="result.html">結果発表</a></p> -->
        <p class="curry_result"><button type="submit" name="cook">結果発表</button></p>
      </div>
    </div>
  </form>
</body>

</html>
