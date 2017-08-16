<!doctype html>

<!--[if lt IE 7 ]>
<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 ie-lt10 no-js" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en-US"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="morgandelaney-me">

    <meta charset="UTF-8">

    <!-- Always force latest IE rendering engine (even in intranet) -->
    <!--[if IE ]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

    <title>Morgan Delaney</title>

    <meta name="title" content="Morgan Delaney">
    <meta name="description"
          content="Full stack web and mobile app developer for small and medium sized businesses and startups."/>
    <meta name="author" content="Morgan Delaney"/>
    <meta name="Copyright"
          content="Copyright &copy; Morgan Delaney <?php echo date('Y'); ?>. All Rights Reserved.">
    <meta name="viewport" content="device-width"/>
    <link rel="shortcut icon" href="full/img/favicon.png"/>
    <link rel="stylesheet" href="full/css/style.css"/>
    <script src="full/js/modernizr-2.8.0.dev.js"></script>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>

</head>

<body id="body">

<div id="wrapper">

    <!-- Welcome -->

    <div class="theme-panel" id="home-welcome">

        <div class="theme-wrapper">

            <div class="abstract">
                <div>
                    <div class="sides">
                        <div class="side left">
                            <img src="full/img/home/howdy.jpg" alt=""/>
                        </div>
                        <div class="side right">
                            <h1>Hi, my name is Morgan</h1>

                            <h2>I make websites. My specialty is front end development and I work heart-and-soul
                                out of beautiful Vancouver, Canada.</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="media">
            <div>
                <?php foreach (array('mobile', 'tablet', 'laptop') as $device) : ?>
                    <div class="medium hide <?php echo $device; ?>"></div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <!-- I can help you -->

    <div class="theme-panel valign" id="home-help">
        <div>

            <div class="theme-wrapper">

                <h2 class="theme-title">Let's work together</h2>

                <ul class="helps">
                    <?php foreach (Content::home_help() as $k => $help) : ?>
                        <li class="has-animation">
                            <span class="number"><span><?php echo $k + 1; ?></span></span>
                            <span class="title"><?php echo $help['title']; ?></span>
                            <span class="desc"><?php echo $help['desc']; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>

        </div>
    </div>

    <!-- Clients -->

    <div class="theme-panel valign" id="home-clients">
        <div>

            <h2 class="theme-title">
        <span class="desktop">
          I've worked with many
          <ul class="stars"><?php for ($i = 0; $i < 5; $i++) echo '<li>star</li>'; ?></ul>
          people, including:
        </span>
                <span class="mobile">Clients</span>
            </h2>

            <img src="full/img/home/logos-big.jpg" class="desktop" alt=""/>
            <img src="full/img/home/mobile-logos.jpg" class="mobile" alt=""/>

        </div>
    </div>

    <!-- Portfolio -->

    <div class="theme-panel valign" id="home-portfolio">
        <div>

            <h2 class="theme-title">
                <span class="desktop">Have a look at my portfolio</span>
                <span class="mobile">Portfolio</span>
            </h2>

            <div class="theme-wrapper">

                <ul class="disciplines">
                    <?php foreach (Content::home_disciplines() as $discipline) : ?>
                        <?php /* Wrap parentheses with a span, to hide during mobile */ ?>
                        <li><?php echo preg_replace('/\s\(.*\)/', '<span>$0</span>', $discipline); ?></li>
                    <?php endforeach; ?>
                </ul>

                <?php foreach (Content::home_portfolio() as $device => $work) : ?>
                    <ul class="work <?php echo $device; ?>">
                        <?php foreach ($work as $portfolio) : ?>
                            <li class="has-animation">
                                <a href="<?php echo $portfolio['url']; ?>" target="_blank">
                  <span class="wrap">
                    <img src="<?php echo 'full/img/home/portfolio/' . $device . '/' .
                        $portfolio['img'] . '.jpg'; ?>" alt="">
                  </span>
                                    <?php if ($device == 'desktop') : ?>
                                        <span class="text title"><?php echo $portfolio['title']; ?></span>
                                        <span class="text tooltip"><?php echo $portfolio['tooltip']; ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>

            </div>

        </div>
    </div>

    <!-- About me -->

    <section class="theme-panel" id="home-about">
        <div class="right">
            <div class="content">
                <div>
                    <span class="title">I’ll work with you to achieve the website or web app of your dreams.</span>
                    <span class="desc">I’m a great listener. I’ve spent my professional career working with fantastic clients,
            finding new, innovative ways to help them achieve their goals. My toolset goes beyond web development:
            communication, management, and analytics are all tools that I use to measure and improve the success of
            your project.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->

    <section class="theme-panel valign" id="home-contact">
        <div>

            <div class="theme-wrapper">

                <h2 class="theme-title">
                    <span class="desktop">I like you. Do you like me?</span>
                    <span class="mobile">Let's chat</span>
                </h2>

                <ul>
                    <li>
                        <a href="mailto:hi@morgandelaney.me"><i class="fa fa-envelope"></i>Say hi@morgandelaney.me</a>
                    </li>
                    <li>
                        <a href="https://github.com/tallmorgan/morgandelaney" target="_blank">
                            <i class="fa fa-github-alt"></i>Reveal how I coded this page
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </section>

</div>

<script type="text/javascript" src="full/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="full/js/waypoints.min.js"></script>
<script type="text/javascript" src="full/js/evd-animate.js"></script>
<script type="text/javascript" src="full/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="full/js/functions.js"></script>

</body>

</html>