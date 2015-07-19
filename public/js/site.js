/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function ($) {

  $('a.page-scroll').bind('click', function (event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });

  $('#signup-form').on('submit', function () {

    var $form = $(this);

    $.ajax({
      method: 'post',
      url: $form.attr('action'),
      data: $form.serialize(),
      success: function (data) {
        $('#signup-body').html(data);
      },
      error: function (data) {
        var errors = data.responseJSON,
          $inputGroup = $form.find('.input-group'),
          $errorContainer = $form.find('.error-container');

        $inputGroup.addClass('has-error');
        $errorContainer.removeClass('hidden').html('<ul class="list-unstyled"></ul>');
        $.each(errors, function (index, value) {
          $errorContainer.find('ul').append('<li>' + value + '</li>');
        });
      }
    });

    return false;
  });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
  target: '.navbar-fixed-top'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function () {
  $('.navbar-toggle:visible').click();
});
