<?php /* Template Name: Home */

get_header(); ?>

  <!-- Welcome -->

  <div class="theme-panel" id="home-welcome">

    <div class="abstract">
      <div>
        <div class="sides">
          <div class="side left">
            <img src="<?php bloginfo('template_url'); ?>/_/img/home/howdy.jpg" alt=""/>
          </div>
          <div class="side right">
            <h1>Hi, my name is Morgan</h1>

            <h2>I make websites. My specialty is in frontend development, and I work heart-and-soul
              out of beautiful Vancouver, Canada.</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="media">
      <div></div>
    </div>

  </div>

  <!-- I can help you -->

  <div class="theme-panel valign" id="home-help">
    <div>

      <h2 class="theme-title">Let's work together</h2>

      <ul class="helps">
        <?php foreach (Content::home_help() as $k => $help) : ?>
          <li>
            <span class="number"><span><?php echo $k + 1; ?></span></span>
            <span class="title"><?php echo $help['title']; ?></span>
            <span class="desc"><?php echo $help['desc']; ?></span>
          </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>

  <!-- Clients -->

  <div class="theme-panel valign" id="home-clients">
    <div>

      <h2 class="theme-title">
        I've worked with many
        <ul class="stars"><?php for ($i = 0; $i < 5; $i++) echo '<li>star</li>'; ?></ul>
        people, including:
      </h2>

      <img src="<?php bloginfo('template_url'); ?>/_/img/home/logos-big.jpg" alt=""/>

    </div>
  </div>

  <!-- Portfolio -->

  <div class="theme-panel valign" id="home-portfolio">
    <div>

      <h2 class="theme-title">Have a look at my portfolio</h2>

      <div class="theme-wrapper">

        <ul class="disciplines">
          <?php foreach (Content::home_disciplines() as $discipline) : ?>
            <li><?php echo $discipline; ?></li>
          <?php endforeach; ?>
        </ul>

        <ul class="work">
          <?php for ($i = 0; $i < 6; $i++) foreach (Content::home_portfolio() as $portfolio) : ?>
            <li>
              <a href="#">
                <span>
                  <img src="<?php echo get_bloginfo('template_url') . '/_/img/home/portfolio/' . $portfolio['img'] . '.jpg'; ?>" alt="">
                </span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>

    </div>
  </div>

  <!-- About me -->

  <section class="theme-panel" id="home-about">
    <div class="right">
      <div class="content">
        <div>
          <span class="title">I’ll work with you to achieve the website or web app of your dreams.</span>
          <span class="desc">I’m a great listener. I’ve spent my professional career working with fantastic clients, finding new, innovative ways to help them achieve their goals. My toolset goes beyond web development: communication, management, and analytics are all tools that I use to measure and improve the success of your project.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->

  <section class="theme-panel valign" id="home-contact">
    <div>
      <h2 class="theme-title">I like you. Do you like me?</h2>

      <ul>
        <li><a href="mailto:hi@morgandelaney.me"><i class="fa fa-envelope"></i>Say hi@morgandelaney.me</a></li>
        <li><a href="https://github.com/tallmorgan/morgandelaney" target="_blank"><i class="fa fa-github-alt"></i>Reveal how I coded this page</a></li>
      </ul>
    </div>
  </section>

<?php get_footer(); ?>