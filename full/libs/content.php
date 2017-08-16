<?php

class Content
{
    public static function home_help()
    {
        return array(
            array(
                'title' => 'You want a beautiful, controllable website',
                'desc' => 'Your website should be more than a site; it should be your toolbox. That’s why the websites I build are not only visually impactful, but they also give you the power to update.',
            ),
            array(
                'title' => 'Your team needs a front end or full stack developer',
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