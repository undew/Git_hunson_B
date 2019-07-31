$(function(){
var m1n =  $('#m1n').val();
var m2n =  $('#m2n').val();
var m3n =  $('#m3n').val();
var m1m =  $('#m1m').val();
var m2m =  $('#m2m').val();
var m3m =  $('#m3m').val();

var t1n =  $('#t1n').val();
var t2n =  $('#t2n').val();
var t3n =  $('#t3n').val();
var t1m =  $('#t1m').val();
var t2m =  $('#t2m').val();
var t3m =  $('#t3m').val();

var f1n =  $('#f1n').val();
var f2n =  $('#f2n').val();
var f3n =  $('#f3n').val();
var f1m =  $('#f1m').val();
var f2m =  $('#f2m').val();
var f3m =  $('#f3m').val();

var ht1n =  $('#ht1n').val();
var ht2n =  $('#ht2n').val();
var ht3n =  $('#ht3n').val();
var ht1m =  $('#ht1m').val();
var ht2m =  $('#ht2m').val();
var ht3m =  $('#ht3m').val();
  $('button').click(
    function(){
      $('button:focus').css('outline','0');
    }
  );
  $('.click_first').click(
    function(){
      $('.cursol_first').css('opacity','1');
      $('.cursol_first').css('transition','0.3s');
    }
  )
  $('#lavel1').click(
  function(){
    $('.first_board').css('opacity','1');
    $('.first_message').css('opacity','1');
    $('.first_message').css('transition','0.3s');
      $('.first_h3').html('<img src="img/kome_hakumai.png" class="img_first"></img>');
    $('#lavel1').css('background-color','yellow');
    $('#lavel1').css('border','solid','0.5px','black');
    $('#lavel2').css('border','none');
    $('#lavel3').css('border','none');
    $('#lavel2').css('background-color','white');
    $('#lavel3').css('background-color','white');
    $('.first_board').html(m1n);
    $('.first_message').html(m1m);
    }
  );

  $('#lavel2').click(
    function(){
      $('.first_board').css('opacity','1');
      $('.first_message').css('opacity','1');
      $('.first_h3').html('<img src="img/food_currypan.png" class="img_first"></img>');
      $('#lavel2').css('background-color','yellow');
      $('#lavel2').css('border','solid','0.5px','black');
      $('#lavel1').css('border','none');
      $('#lavel3').css('border','none');
      $('#lavel1').css('background-color','white');
      $('#lavel3').css('background-color','white');
      $('.first_board').html(m2n);
    $('.first_message').html(m2m);
      }
    );

    $('#lavel3').click(
      function(){
        $('.first_board').css('opacity','1');
        $('.first_message').css('opacity','1');
      $('.first_h3').html('<img src="img/pan_india_naan.png" class="img_first"></img>');
        $('#lavel3').css('background-color','yellow');
        $('#lavel3').css('border','solid','0.5px','black');
        $('#lavel1').css('border','none');
        $('#lavel2').css('border','none');
        $('#lavel2').css('background-color','white');
        $('#lavel1').css('background-color','white');
        $('.first_board').html(m3n);
    $('.first_message').html(m3m);
        }
      );

      // -------------------------second------------------------------------

      $('.click_second').click(
        function(){
          $('.cursol_second').css('opacity','1');
          $('.cursol_second').css('transition','0.3s');
        }
      )
      $('#lavel4').click(
      function(){
        $('.second_board').css('opacity','1');
        $('.second_message').css('opacity','1');
        $('.second_message').css('transition','0.3s');
          $('.second_h3').html('<img src="img/curry_ko.png" class="img_second"></img>');
        $('#lavel4').css('background-color','yellow');
        $('#lavel4').css('border','solid','0.5px','black');
        $('#lavel5').css('border','none');
        $('#lavel6').css('border','none');
        $('#lavel5').css('background-color','white');
        $('#lavel6').css('background-color','white');
        $('.second_board').html(t1n);
        $('.second_message').html(t1m);
        }
      );

      $('#lavel5').click(
        function(){
          $('.second_board').css('opacity','1');
          $('.second_message').css('opacity','1');
          $('.second_h3').html('<img src="img/cooking_hoajyao.png" class="img_second"></img>');
          $('#lavel5').css('background-color','yellow');
          $('#lavel5').css('border','solid','0.5px','black');
          $('#lavel4').css('border','none');
          $('#lavel6').css('border','none');
          $('#lavel4').css('background-color','white');
          $('#lavel6').css('background-color','white');
          $('.second_board').html(t2n);
          $('.second_message').html(t2m);
          }
        );

        $('#lavel6').click(
          function(){
            $('.second_board').css('opacity','1');
            $('.second_message').css('opacity','1');
          $('.second_h3').html('<img src="img/cooking_spice_pepper_tsubu.png" class="img_second"></img>');
            $('#lavel6').css('background-color','yellow');
            $('#lavel6').css('border','solid','0.5px','black');
            $('#lavel4').css('border','none');
            $('#lavel5').css('border','none');
            $('#lavel5').css('background-color','white');
            $('#lavel4').css('background-color','white');
            $('.second_board').html(t3n);
          $('.second_message').html(t3m);
            }
          );
  // -------------------------third------------------------------------

          $('.click_third').click(
            function(){
              $('.cursol_third').css('opacity','1');
              $('.cursol_third').css('transition','0.3s');
            }
          )
          $('#lavel7').click(
          function(){
          $('.third_board').css('opacity','1');
          $('.third_message').css('opacity','1');
          $('.third_message').css('transition','0.3s');
          $('.third_h3').html('<img src="img/curry_ko.png" class="img_third"></img>');
          $('#lavel7').css('background-color','yellow');
          $('#lavel7').css('border','solid','0.5px','black');
          $('#lavel8').css('border','none');
          $('#lavel9').css('border','none');
          $('#lavel8').css('background-color','white');
          $('#lavel9').css('background-color','white');
          $('.third_board').html(f1n);
          $('.third_message').html(f1m);
          }
        );

          $('#lavel8').click(
          function(){
            $('.third_board').css('opacity','1');
            $('.third_message').css('opacity','1');
            $('.third_h3').html('<img src="img/cooking_hoajyao.png" class="img_third"></img>');
            $('#lavel8').css('background-color','yellow');
            $('#lavel8').css('border','solid','0.5px','black');
            $('#lavel7').css('border','none');
            $('#lavel9').css('border','none');
            $('#lavel7').css('background-color','white');
            $('#lavel9').css('background-color','white');
            $('.third_board').html(f2n);
            $('.third_message').html(f2m);
            }
          );

        $('#lavel9').click(
          function(){
            $('.third_board').css('opacity','1');
            $('.third_message').css('opacity','1');
            $('.third_h3').html('<img src="img/cooking_spice_pepper_tsubu.png" class="img_third"></img>');
            $('#lavel9').css('background-color','yellow');
            $('#lavel9').css('border','solid','0.5px','black');
            $('#lavel7').css('border','none');
            $('#lavel8').css('border','none');
            $('#lavel8').css('background-color','white');
            $('#lavel7').css('background-color','white');
            $('.third_board').html(f3n);
            $('.third_message').html(f3m);
              }
            );
  // -------------------------four------------------------------------

          $('.click_four').click(
          function(){
            $('.cursol_four').css('opacity','1');
            $('.cursol_four').css('transition','0.3s');
            }
          )
          $('#lavel10').click(
        function(){
          $('.four_board').css('opacity','1');
          $('.four_message').css('opacity','1');
          $('.four_message').css('transition','0.3s');
          $('.four_h3').html('<img src="img/curry_ko.png" class="img_four"></img>');
          $('#lavel10').css('background-color','yellow');
          $('#lavel10').css('border','solid','0.5px','black');
          $('#lavel11').css('border','none');
          $('#lavel12').css('border','none');
          $('#lavel11').css('background-color','white');
          $('#lavel12').css('background-color','white');
          $('.four_board').html(ht1n);
          $('.four_message').html(ht1m);
          }
        );

         $('#lavel11').click(
            function(){
           $('.four_board').css('opacity','1');
           $('.four_message').css('opacity','1');
          $('.four_h3').html('<img src="img/cooking_hoajyao.png" class="img_four"></img>');
          $('#lavel11').css('background-color','yellow');
          $('#lavel11').css('border','solid','0.5px','black');
          $('#lavel10').css('border','none');
          $('#lavel12').css('border','none');
          $('#lavel10').css('background-color','white');
          $('#lavel12').css('background-color','white');
          $('.four_board').html(ht2n);
          $('.four_message').html(ht2m);
          }
        );

        $('#lavel12').click(
        function(){
        $('.four_board').css('opacity','1');
        $('.four_message').css('opacity','1');
        $('.four_h3').html('<img src="img/cooking_spice_pepper_tsubu.png" class="img_four"></img>');
        $('#lavel12').css('background-color','yellow');
        $('#lavel12').css('border','solid','0.5px','black');
        $('#lavel10').css('border','none');
        $('#lavel11').css('border','none');
        $('#lavel11').css('background-color','white');
        $('#lavel10').css('background-color','white');
        $('.four_board').html(ht3n);
        $('.four_message').html(ht3m);
        }
      );
});
