(function($) {
  $(document).ready(function() {
    $('#subscribe').click(function() {
      if($('#subscribe-bar').hasClass('hidden')) {
        $('#subscribe-bar').removeClass('hidden');
      } else {
        $('#subscribe-bar').addClass('hidden');
      }
    });
  });

})(jQuery);
