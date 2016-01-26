(function($) {
  var $win = $(window),
      $active_event = null;

  $(function() {
    $('#lw_cal').on('click', '.lw_search_icon', function() {
      $(this).siblings('form').submit();
    })
    .on('click touchstart', '#lw_cal_month_table .lw_cal_event', function(e) {
      var $this = $(this);

      if ($win.width() < 768) { 
        e.preventDefault();
        e.stopPropagation();

        if ($active_event) {
          $active_event.removeClass('active');
        }
        $this.addClass('active');
        $active_event = $this;

        $('body').one('click', function() {
          $this.removeClass('active');
          if ($active_event) {
            $active_event.removeClass('active');
          }
        });
      }
      return true;
    });
  });
}(livewhale.jQuery));
