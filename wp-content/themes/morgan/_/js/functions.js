var Mo_Home = function( $ )
{
  var root = this;
  
  this.init = function()
  {
    root.animate();
  };

  this.animate = function()
  {
    if ( $( '#home-help' ).find( '.theme-title' ).offset().top )
    evdAnimate.left_to_right( '#home-help', '.has-animation', 250 );
    evdAnimate.left_to_right( '#home-portfolio', '.has-animation', 250 );
  };
  
  this.init();
  return this;
};

var moHome;
jQuery(function() { moHome = new Mo_Home( jQuery ); });