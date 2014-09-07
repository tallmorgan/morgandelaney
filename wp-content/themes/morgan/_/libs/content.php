<?php

class Content
{
  public static function home_help()
  {
    return array(
      array(
        'title' => 'You want a beautiful, controllable website',
        'desc' => 'Your website should be more than site; it should be your toolbox. That’s why the websites I build are not only visually impactful, but they also give you the power to update.',
      ),
      array(
        'title' => 'Your team needs a frontend developer',
        'desc' => 'Working for more than 3 years with agencies, I’ve got a knack for crafting the perfect user experience and delivering the product you want.',
      ),
      array(
        'title' => 'You want a mobile targeted HTML app',
        'desc' => 'I’m passionate about new technology. That’s why I’m always up-to-date with the latest in mobile trends. My websites use proven, cutting-edge technology for the best result.',
      ),
    );
  }

  public static function home_disciplines()
  {
    return array(
      'PHP (including CodeIgniter-Bonfire, WordPress, Drupal)',
      'JavaScript (including jQuery, AngularJS)',
      'MySQL',
      'HTML5',
      'CSS3',
      'Unix-based Server Administration',
      'Mobile/Responsive Web',
      'SASS',
      'Git',
      //'LAMP stack',
    );
  }

  public static function home_portfolio()
  {
    return array(
      array(
        'img' => 'evoda',
        'url' => 'http://evodagroup.com/',
        'tooltip' => 'Check out my team',
      ),
      array(
        'img' => 'know-gmo',
        'url' => 'http://knowgmo.com/quiz/',
        'tooltip' => 'Take the quiz',
      ),
      array(
        'img' => 'barbershop',
        'url' => 'http://barbershopfilms.ca/',
        'tooltip' => 'Browse a video portfolio',
      ),
      array(
        'img' => 'north-arm',
        'url' => 'http://websitestage.ca/north-arm/',
        'tooltip' => 'An awesome full-screen app feel',
      ),
      array(
        'img' => 'performance-evolution',
        'url' => 'http://myperformanceevolution.com/',
        'tooltip' => 'A beautiful, scrolling website',
      ),
      array(
        'img' => 'sharenation',
        'url' => 'http://sharenation.tv/',
        'tooltip' => 'A responsive coupon-charing app',
      )
    );
  }
}