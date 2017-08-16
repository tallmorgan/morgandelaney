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
                    'img' => 'evoda',
                    'url' => 'http://evodagroup.com/',
                    'title' => 'Evoda Group',
                    'tooltip' => 'Check out my team',
                ),
                array(
                    'img' => 'know-gmo',
                    'url' => 'http://knowgmo.com/quiz/',
                    'title' => 'Nature\'s Path: Know GMO',
                    'tooltip' => 'Take the quiz',
                ),
                array(
                    'img' => 'barbershop',
                    'url' => 'http://barbershopfilms.ca/',
                    'title' => 'Barbershop Films',
                    'tooltip' => 'Browse a video portfolio',
                ),
                array(
                    'img' => 'north-arm',
                    'url' => 'http://websitestage.ca/north-arm/',
                    'title' => 'North Arm',
                    'tooltip' => 'An awesome full-screen app feel',
                ),
                array(
                    'img' => 'performance-evolution',
                    'url' => 'http://myperformanceevolution.com/',
                    'title' => 'Performance Evolution',
                    'tooltip' => 'A beautiful, scrolling website',
                ),
                array(
                    'img' => 'sharenation',
                    'url' => 'http://sharenation.tv/',
                    'title' => 'ShareNation',
                    'tooltip' => 'A responsive coupon-charing app',
                ),
            ),
            'mobile' => array(
                array(
                    'img' => 'evoda',
                    'url' => 'http://evodagroup.com/',
                ),
                array(
                    'img' => 'sharenation',
                    'url' => 'http://sharenation.tv',
                ),
                array(
                    'img' => 'comfort-inn',
                    'url' => 'http://comfortinndowntown.com',
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