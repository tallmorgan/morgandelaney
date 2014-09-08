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
    var current_id = 0,
      throttle = 0,
      throttle_step = 300; // Break up when the images actually appear, just a bit

    $( '#home-welcome' ).find( '.media .medium' ).each(function()
    {
      var $this = $( this ),
        bg = $( this ).css( 'background-image' ),
        matches = bg.match( /\((.*)\)/ );

      if ( matches )
      {
        var id = 'hero-' + current_id;

        $('<img />', { src: matches[1], id: id }).appendTo( 'body' );

        imagesLoaded( id, function()
        {
          $( id ).remove();
          setTimeout(function()
          {
            $this.removeClass( 'hide' );
          }, throttle );
          throttle += throttle_step;
        });

        current_id++;
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