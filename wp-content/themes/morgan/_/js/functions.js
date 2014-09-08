var Mo_Home = function( $ )
{
  var root = this;
  
  this.init = function()
  {
    root.animate_hero();
    root.animate_body();
  };

  this.animate_hero = function()
  {
    var throttle = 0,
      throttle_step = 300; // Break up when the images actually appear, just a bit

    $( '#home-welcome' ).find( '.media .medium' ).each(function()
    {
      var $this = $( this ),
        bg = $( this ).css( 'background-image' ),
        matches = bg.match( /\((.*)\)/ );

      if ( matches )
      {
        // Image load check via:
        // http://stackoverflow.com/questions/5057990/how-can-i-check-if-a-background-image-is-loaded
        $('<img/>').attr('src', matches[1]).load(function()
        {
          $(this).remove(); // prevent memory leaks as @benweet suggested
          setTimeout(function()
          {
            $this.removeClass( 'hide' );
          }, throttle );
          throttle += throttle_step;
        });
      }
    });
  };

  this.animate_body = function()
  {
    if ( $( '#home-help' ).find( '.theme-title' ).offset().top )
    evdAnimate.left_to_right( '#home-help', '.has-animation', 250 );
    evdAnimate.left_to_right( '#home-portfolio', '.has-animation', 200 );
  };
  
  this.init();
  return this;
};

var moHome;
jQuery(function() { moHome = new Mo_Home( jQuery ); });