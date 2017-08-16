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
    <meta name="description" content="<?php echo Content::meta_description(); ?>"/>
    <meta name="author" content="Morgan Delaney"/>
    <meta name="Copyright" content="<?php echo Content::meta_copyright(); ?>">
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700"/>
    <link rel="shortcut icon" href="full/img/favicon.png"/>
    <link rel="stylesheet" href="full/css/style.css?v=2"/>
    <script src="full/js/modernizr-2.8.0.dev.js"></script>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>

</head>

<body id="body">

<div id="wrapper">

    <?php if (isset($_GET['grid'])): ?>
        <div id="dev-grid">
            <div class="center">
                <?php for ($i = 0; $i < 12; $i++): ?>
                    <div class="column"></div>
                <?php endfor; ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Welcome -->

    <div class="theme-panel" id="home-welcome">

        <div class="theme-wrapper">

            <div class="abstract">
                <div>
                    <div class="sides">
                        <div class="side left">
                            <div class="image">
                                <img src="full/img/home/howdy.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="side right">
                            <h1>Hi, my name is Morgan</h1>

                            <h2>I make web and mobile apps. I am a full stack developer with a specialty in front end
                                based in beautiful Vancouver, Canada.</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="media">
            <div>
                <?php foreach (array('mobile', 'tablet', 'laptop') as $device) : ?>
                    <div class="medium hide <?php echo $device; ?>">
                        <div></div>
                    </div>
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

            <div class="img desktop">
                <div><img src="full/img/home/logos-big-fs8.png" alt=""/></div>
            </div>
            <div class="img mobile">
                <div><img src="full/img/home/mobile-logos-fs8.png" alt=""/></div>
            </div>

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
                                <div class="height">
                                    <a href="<?php echo $portfolio['url']; ?>" target="_blank">
                                        <span class="wrap">
                                            <img src="<?php echo 'full/img/home/portfolio/' . $device . '/' .
                                                $portfolio['img'] . '-fs8.png'; ?>" alt="">
                                        </span>
                                        <?php if ($device == 'desktop') : ?>
                                            <span class="text title"><?php echo $portfolio['title']; ?></span>
                                            <span class="text tooltip"><?php echo $portfolio['tooltip']; ?></span>
                                        <?php endif; ?>
                                    </a>
                                </div>
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

<?php if (isset($_GET['livereload'])): ?>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>
<?php endif; ?>

</body>

</html>
