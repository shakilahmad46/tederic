var $ = jQuery.noConflict();

$(function () {
  $('a[href="#search"]').on('click', function(event) {
      event.preventDefault();
      $('#search').addClass('open');
      $('#search > form > input[type="search"]').focus();
  });
  
  $('#search, #search button.close').on('click keyup', function(event) {
      if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
          $(this).removeClass('open');
      }
  });
  
  //Do not include! This prevents the form from submitting for DEMO purposes only!
  
});

var btn = $('#upbtn');          
$(window).scroll(function() {
  if ($(window).scrollTop() > 1000) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '1000');
});