$('.toggle-btn').click(function () {
  $(document.querySelectorAll('header')).toggleClass('open');
});

$('#mask').on('click', function () {
  $(document.querySelectorAll('header')).removeClass('open');
});

$(window).scroll(function () {
  if ($(window).scrollTop() > 640) {
    $('header').addClass('change');
  } else {
    $('header').removeClass('change');
  }
});

$(window).scroll(function () {
  if ($(window).scrollTop() > 640) {
    $(document.getElementsByClassName('toggle-btn')).addClass('spanColorBlack');
  } else {
    $(document.getElementsByClassName('toggle-btn')).removeClass(
      'spanColorBlack'
    );
  }
});
