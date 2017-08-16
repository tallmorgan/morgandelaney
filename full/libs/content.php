<?php

class Content
{
    public static function home_help()
    {
        return array(
            array(
                'title' => 'Your team needs a front end or full stack developer',
                'desc' => 'With more than 6 years agency experience, I’ve got a knack for crafting the perfect UI/UX, collaborating effectively on teams, and doing so socially.',
            ),
            array(
                'title' => 'You want a native iOS and Android mobile app',
                'desc' => 'New technology such as React Native allows developers like me to create blazing fast, cross-platform native mobile apps for less cost and more value.',
            ),
            array(
                'title' => 'You want a responsive or mobile targeted HTML app',
                'desc' => 'All my websites and web apps are responsive. With a sharp increase in mobile users, experience in effective responsive is a must. Why? ' . str_replace(' ', '&nbsp;', 'Because it\'s ' . date('Y') . '.'),
            ),
        );
    }

    public static function home_disciplines()
    {
        return array(
            'PHP (+ CodeIgniter-Bonfire, WordPress, Drupal)',
            'JavaScript (+ jQuery, AngularJS)',
            'MySQL',
            'HTML5',
            'CSS3',
            'SASS',
            'Git',
            'Photoshop',
            'Illustrator',
            'Unix-based Server Administration',
            'Mobile/Responsive Web',
            //'LAMP stack',
        );
    }

    public static function home_portfolio()
    {
        return array(
            'desktop' => array(
                array(
                    'img' => 'bikes',
                    'url' => 'http://www.bikes.com/',
                    'title' => 'Rocky Mountain Bikes',
                    'tooltip' => 'Slick multi-page redesign',
                ),
                array(
                    'img' => 'more-rewards',
                    'url' => 'https://morerewards.ca/',
                    'title' => 'More Rewards',
                    'tooltip' => 'E-commerce repaint',
                ),
                array(
                    'img' => 'western-family',
                    'url' => 'https://westernfamily.ca/',
                    'title' => 'Western Family',
                    'tooltip' => 'CMS for a large grocery brand',
                ),
                array(
                    'img' => 'invoke',
                    'url' => 'https://invokedigital.co/',
                    'title' => 'Invoke Digital',
                    'tooltip' => 'Me and my team',
                ),
                array(
                    'img' => 'barbershop',
                    'url' => 'http://barbershopfilms.ca/',
                    'title' => 'Barbershop Films',
                    'tooltip' => 'Video portfolio',
                ),
                array(
                    'img' => 'performance-evolution',
                    'url' => 'http://myperformanceevolution.com/',
                    'title' => 'Performance Evolution',
                    'tooltip' => 'Full-screen scrolling website',
                ),
            ),
            'mobile' => array(
                array(
                    'img' => 'bikes',
                    'url' => 'http://www.bikes.com/',
                ),
                array(
                    'img' => 'more-rewards',
                    'url' => 'https://morerewards.ca/',
                ),
                array(
                    'img' => 'western-family',
                    'url' => 'https://westernfamily.ca/',
                ),
            ),
        );
    }

    public static function meta_description()
    {
        return "Full stack web and mobile app developer for small and medium sized businesses and startups.";
    }

    public static function meta_copyright()
    {
        return "Copyright &copy; Morgan Delaney " . date('Y') . ". All Rights Reserved.";
    }
}