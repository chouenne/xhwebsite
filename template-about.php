<?php

/*
Template Name:  My Story
*/
get_header(); ?>
<!-- start the loop -->
<?php
if (have_posts()):
  while (have_posts()):
    the_post();

    ?>

    <main class="page-about">
      <section class="about-content">
        <div class="about-page-left">
          <?php
          $imgPageAbout = get_field('page_left_image');
          ?>
          <img src="<?php echo esc_url($imgPageAbout['url']); ?>" alt="<?php echo esc_attr($imgPageAbout['alt']); ?>">
        </div>
        <div class="about-page-right">
          <div class="container">
            <div class="right-text">
              <div class="story-hero-title">
                <h2>
                  <?php the_field('page_title'); ?>
                </h2>
                <p> <?php the_field('about_description'); ?></p>
              </div>

              <div class="value story-text">
                <h4>my value</h4>
                <div class="value-grid">
                  <div class="value-item">
                    <h3 class="value-number">01</h3>
                    <h5 class="value-title"> <?php the_field('value_title_1'); ?></h5>
                    <p class="value-content"><?php the_field('value_content_1'); ?></p>
                  </div>
                  <div class="value-item">
                    <h3 class="value-number">02</h3>
                    <h5 class="value-title"><?php the_field('value_title_2'); ?></h5>
                    <p class="value-content"><?php the_field('value_content_2'); ?></p>
                  </div>
                  <div class="value-item">
                    <h3 class="value-number">03
                      <h5 class="value-title"><?php the_field('value_title_3'); ?></h5>
                      <p class="value-content"><?php the_field('value_content_3'); ?>
                      </p>
                  </div>
                  <div class="value-item">
                    <h3 class="value-number">04</h3>
                    <h5 class="value-title"><?php the_field('value_title_4'); ?></h5>
                    <p class="value-content"><?php the_field('value_content_4'); ?></p>
                  </div>
                </div>
              </div>

            </div>
            <!-- end of right-text -->


          </div>
          <!-- end of container -->
        </div>
        <!-- end of page-right -->
      </section>

      <section class="about-cta"
        style="background-image: url(<?php the_field('about_cta_bg'); ?>); background-color: rgba(15, 15, 15, 0.6);">
        <div class="container">
          <div class="text-box">
            <h3><?php the_field('about_cta_title'); ?></h3>
            <p><?php the_field('about_cta_description'); ?></p>
            <?php
            $btnStoryCta = get_field('about_cta_btn');

            $btnStoryCtaLink = $btnStoryCta['url'];
            $btnStoryCtaText = $btnStoryCta['title'];
            $btnStoryCtaTarget = $btnStoryCta['target'];

            ?>

            <a class="btn btn-bk" target="<?php $btnStoryCtaTarget; ?>" href="<?php echo $btnStoryCtaLink; ?>">
              <?php echo $btnStoryCtaText; ?>
            </a>
          </div>

        </div>
      </section>


    </main>

    <?php
  endwhile;
endif;
?>

<!-- close the loop -->
<?php get_footer(); ?>