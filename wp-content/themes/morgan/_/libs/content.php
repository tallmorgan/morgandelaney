<?php

class Content
{
  public static function home_help()
  {
    return array(
      array(
        'title' => 'You want a beautiful, controllable website',
        'desc' => 'Your website should do more than lounge around on the internet. That’s why the websites I build are not only visually impactful, but they also give you the power to update.',
      ),
      array(
        'title' => 'Your team needs a frontend developer',
        'desc' => 'With more than 3 years of agency teamwork, I’ve got a knack for building websites and web applications. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
      ),
      array(
        'title' => 'You want a mobile targeted HTML app',
        'desc' => 'I’m passionate about new technology. That’s why I’m happy to keep up-to-date with the latest in mobile trends, and deliver a fast, user-friendly experience for targeted applications.',
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
    );
  }

  public static function home_portfolio()
  {
    return array(
      array(
        'img' => 'north-arm',
      ),
    );
  }
}