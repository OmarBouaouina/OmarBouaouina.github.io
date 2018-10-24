$(function(){
  $('#uni').click(function(){
    $('#corps').css('background','white');
  });
  $('#horizontal').click(function(){
    $('#corps').css('background', '-moz-linear-gradient(top left, red, yellow)')
			   .css('background', '-webkit-gradient(linear, 0% 0%, 100% 0%, from(red), to(yellow))')
			   .css('background', '-ms-linear-gradient(left, red, yellow)');
  });
  $('#vertical').click(function(){
    $('#corps').css('background', '-moz-linear-gradient(top, red, yellow)')
			   .css('background', '-webkit-gradient(linear, 0% 0%, 0% 100%, from(red), to(yellow))')
			   .css('background', '-ms-linear-gradient(top, red, yellow)');
  });
  $('#texture').click(function(){
    $('#corps').css('background', 'url(fond.gif)');
  });
  $('#liste').on('change', function(){
    window.location = $(this).val();
  });
});
