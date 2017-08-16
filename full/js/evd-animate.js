/**
 * This helps various CSS3 animations throughout
 * the website.
 */
var Evd_Animate = function()
{
  var root = this,
    debug = false,
    has_scrolled = false;

  this.init = function()
  {
    // Nothing yet
  };

  /**
   * Animate an elements in from left to right. It starts by
   * resetting all elements to having a .hide class, then removing
   * them every 150ms.
   *
   * @param  {string} container CSS selector of full width container for waypoint
   * @param  {string} elements  The CSS selector of elements within container to affect
   * @param  {int}    throttle  Time in milliseconds between removing .hide class
   * @return {void}
   */
  this.left_to_right = function( container, elements, throttle )
  {
    var $panel 		= $( container ),
      $li 		= $panel.find( elements ),
      timeouts 	= [];

    if ( debug ) console.log( 'binding left_to_right on "' + container + '"' );

    function reset_animation()
    {
      $li
        .addClass( 'hide' );
    }

    root._waypoint( $panel, reset_animation, function( direction )
    {
      root._generate_timeouts( $li, throttle, this );
    });
  };

  /**
   * "Slide" an element in from the left/right and then
   * "drop" elements into place.
   *
   * @param  {string} container The full width container for waypoint
   * @param  {string} slide     CSS selector to slide in (single)
   * @param  {string} drop      CSS selector to drop (multiple)
   * @return {void}
   */
  this.slide_and_drop = function( container, slide, drop )
  {
    var $container = $( container ),
      $slide = $container.find( slide ),
      $drop = $container.find( drop );

    function reset_animation()
    {
      $.each( [ $slide, $drop ], function( key, $this )
      {
        $this
          .addClass( 'hide' );
      });
    }

    root._waypoint( $container, false, function( direction )
    {
      var waypoint = this;

      $slide
        .removeClass( 'hide' );

      this.timeouts.push( setTimeout(function()
      {
        root._generate_timeouts( $drop, 500, waypoint );
      }, 300 ) );
    });
  };

  /**
   * Iterate from 0% to X% over Y steps, and add
   * classes on each step.
   *
   * @param  {string}  container CSS selector of parent element used for waypoints
   * @param  {string}  number    CSS selector of number to change
   * @param  {string}  elements  CSS selector of elements with class-steps to toggle
   * @param  {integer} steps     The number of steps between 0 and max
   * @param  {integer} throttle  Time in milliseconds between each step
   * @return {void}
   */
  this.percent_grade = function( container, number, elements, steps, throttle )
  {
    var $container 	= $( container ),
      $num 		= $( number ),
      $elements 	= $( elements ),
      max 		= parseInt( $num.text() );

    function reset_animation()
    {
      $num.text( '0%' );

      $.each( [ $elements, $container ], function()
      {
        $( this ).addClass( 'hide' );
      });
    }

    root._waypoint( $container, reset_animation, function( direction )
    {
      var waypoint = this;

      $container.removeClass( 'hide' );

      var time = 0;

      for ( i=0;i<=steps;i++ )
      {
        this.timeouts.push( setTimeout((function( i )
        {
          return function()
          {
            if ( parseInt( $num.text() ) == max ) return;
            if ( waypoint.cancelled ) return;

            // Update text
            var num = Math.ceil( max / steps * i );
            $num.text( num + '%' );

            // Reveal element
            if ( i-1 >= 0 )
            {
              $elements.eq( i-1 ).removeClass( 'hide' );
            }
          }
        })(i), time ) );

        time += throttle;
      }
    });
  };

  /**
   * If the page has case studies on it, then animate the active
   * panel as the user scrolls by it.
   *
   * @return {void}
   */
  this.case_studies = function()
  {
    var $container = $( '.case-studies' );

    function reset_animation()
    {
      $container.addClass( 'hide' );
    }

    root._waypoint( $container, reset_animation, function( direction )
    {
      if ( $container.hasClass( 'hide' ) )
      {
        $container.removeClass( 'hide' );

        var $panel = $container.find( '.panel.active' );
        $panel.removeClass( 'active' );
        $panel[0].offsetWidth = $panel[0].offsetWidth;
        $panel.addClass( 'active' );
      }
    });
  };

  /**
   * Shortcut to install waypoints on a container, which
   * will automatically reset the animation, and then bind
   * appropriate time to reset animation upon scrolling.
   *
   * @param  {array}    $element        jQuery object array which triggers waypoint
   * @param  {function} reset_animation On leaving viewport, reset elements
   * @param  {function} callback        On reaching viewport, run this function
   * @return {void}
   */
  this._waypoint = function( $element, reset_animation, callback )
  {
    var waypoint = { timeouts: [], cancelled: false };

    //if ( typeof reset_animation == 'function' ) reset_animation();

    if ( debug ) console.log( 'binding ', $element );

    function start( direction )
    {
      if ( debug ) console.log( 'calling "' + $element.selector + '" from ' + direction );

      $.each( waypoint.timeouts, function( k, v )
      {
        clearTimeout( v );
        delete waypoint.timeouts[ k ];
      });

      waypoint.cancelled = false;

      callback.call( waypoint, direction );
    }

    function reset( direction )
    {
      if ( debug ) console.log( 'clearing "' + $element.selector + '" from ' + direction );

      waypoint.cancelled = true;

      if ( has_scrolled && typeof reset_animation == 'function' ) reset_animation();
    }

    $( window ).one( 'scroll', function()
    {
      $element

        // Set the animation
        .waypoint( start, { offset: '60%' })
        .waypoint( start, { offset: '-25%' });

      $element

        // Clear the animation
        .waypoint( reset, { offset: '100%' })
        .waypoint( reset, { offset: function() { return -$( this ).outerHeight(); } });

      has_scrolled = true;
    });
  };

  /**
   * Populate an array with a series of setTimeout
   * callbacks, spaced out by throttle var.
   *
   * @param  {array}   $elements Array of jQuery objects
   * @param  {integer} throttle  Milliseconds between setTimeout
   * @param  {object}  waypoint  The waypoint data object
   * @return {array}             An array of setTimeout functions
   */
  this._generate_timeouts = function( $elements, throttle, waypoint )
  {
    var time = 0;

    $elements
      .each(function( k, v )
      {
        var $this = $( this );

        $.each( [ 'transition', 'transition-long', 'transition-ent-speed' ], function( key, value )
        {
          if ( $this.hasClass( value ) )
          {
            $this.data( 'transition-class', value );
            $this.removeClass( value );
          }
        });

        waypoint.timeouts.push(setTimeout(function()
        {
          if ( waypoint.cancelled ) return false;

          $this
            .removeClass( 'hide' );

          if ( $this.data( 'transition-class' ) )
          {
            $this
              .addClass( $this.data( 'transition-class' ) );
          }
        }, time ) );

        time += throttle;
      });
  };

  this.init();
  return this;
};

var evdAnimate;
$(function() { evdAnimate = new Evd_Animate(); });