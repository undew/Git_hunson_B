$(function(){

  $('.board_click').click(
    function(){
      $('#board_form').css('top','-15%');
      $('#board_form').css('transition','0.3s');
      $('.board_table').css('opacity','1');
      $('.board_table').css('z-index','99');
      $('.board_table').css('transition','0.3s');
      $('.board_click').css('line-height','225px');
      $('.board_click').css('transition','0.3s');
      $('.board_click').css('color','white');
      $('.board_click').css('z-index','-99');
    }
  );
  $('.button_submit').click(
    function(){
      $('#board_form').css('top','10%');
      $('#board_form').css('transition','0.3s');
      $('.board_table').css('opacity','0');
      $('.board_table').css('z-index','-99');
      $('.board_table').css('transition','0.3s');
      $('.board_click').css('line-height','225px');
      $('.board_click').css('transition','0.3s');
      $('.board_click').css('color','white');
      $('.board_click').css('z-index','99');
      $('.board_click').css('color','black');
<<<<<<< HEAD
      $('.board_click').html('<a href="curry_result.html"><p class="board_click">掲示板へ</p></a>');
=======
      $('.board_click').html('<a href="index.html"><p class="board_click">投稿が完了しました！</p></a>');
>>>>>>> 9b9555a048b47aa990c876485bbcaf46eca86fcc

    }
  );

});
