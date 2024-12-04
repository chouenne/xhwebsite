<?php get_header(); ?>

<!-- start the loop -->
<?php
if (have_posts()):
  while (have_posts()):
    the_post();
    ?>

    <main class="project-page">
      <section class="project-hero">
        <div class="project-flex">
          <div class="project-img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <div class="">
              <?php
              $imgProject = get_field('project_hero_image');

              ?>

              <img src="<?php echo esc_url($imgProject['url']); ?>" alt="<?php echo esc_attr($imgProject['alt']); ?>">
            </div>
          </div>

          <?php
  endwhile;
endif;
?>
      <div class="project-hero-right">
        <h6>
          <?php the_title(); ?>
        </h6>
      </div>
    </div>

  </section>

  <section class="project-content">
    <div class="container">
      <p><?php the_content(); ?></p>
    </div>
  </section>
</main>

<!-- close the loop -->
<?php get_footer(); ?>