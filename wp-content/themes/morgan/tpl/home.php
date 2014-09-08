<?php /* Template Name: Home */

get_header(); ?>

  <!-- Welcome -->

  <div class="theme-panel" id="home-welcome">

    <div class="theme-wrapper">

      <div class="abstract">
        <div>
          <div class="sides">
            <div class="side left">
              <img src="<?php bloginfo('template_url'); ?>/_/img/home/howdy.jpg" alt=""/>
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
        <?php foreach( array( 'mobile', 'tablet', 'laptop' ) as $device ) : ?>
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

      <img src="<?php bloginfo('template_url'); ?>/_/img/home/logos-big.jpg" class="desktop" alt=""/>
      <img src="<?php bloginfo('template_url'); ?>/_/img/home/mobile-logos.jpg" class="mobile" alt=""/>

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
            <li><?php echo preg_replace( '/\s\(.*\)/', '<span>$0</span>', $discipline ); ?></li>
          <?php endforeach; ?>
        </ul>

        <?php foreach (Content::home_portfolio() as $device => $work) : ?>
          <ul class="work <?php echo $device; ?>">
            <?php foreach ($work as $portfolio) : ?>
              <li class="has-animation">
                <a href="<?php echo $portfolio[ 'url' ]; ?>" target="_blank">
                  <span class="wrap">
                    <img src="<?php echo get_bloginfo('template_url') . '/_/img/home/portfolio/' . $device . '/' .
                      $portfolio['img'] . '.jpg'; ?>" alt="">
                  </span>
                  <?php if ( $device == 'desktop' ) : ?>
                    <span class="text title"><?php echo $portfolio[ 'title' ]; ?></span>
                    <span class="text tooltip"><?php echo $portfolio[ 'tooltip' ]; ?></span>
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
            <a href="https://github.com/tallmorgan/morgandelaney" target="_blank"><i class="fa fa-github-alt"></i><!--
              -->Reveal how I coded this page</a>
          </li>
        </ul>

      </div>

    </div>
  </section>

<?php get_footer(); ?>