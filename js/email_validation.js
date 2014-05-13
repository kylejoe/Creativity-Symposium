(function ($) {
  'use strict';
  $(function () {
    var contactBox = $('.contact-box');
    contactBox.on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
      contactBox.removeClass('animated fadeOutDownBig');
    });
    $('.close').click(function(event) {
      event.preventDefault();
      contactBox.addClass('animated fadeOutDownBig');
    });
  });
    $('#contact-form').validate({
      errorElement: 'div',
      messages: {
        name: 'Please introduce yourself',
        email: {
          required: 'Please give us your email so we can reply',
          email: 'It doesn\'t look like email address'
        },
        message: 'Please write something, don\'t be shy'
      },
      submitHandler: function(form) {
      }
    });
  });
