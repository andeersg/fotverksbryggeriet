<?php get_header(); ?>

<section class="page page--single">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>


            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10"> -->
                      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                        <div class="beer-title">
                          <h1 class="article__heading">
                            <!-- <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> -->
                            <?php the_title(); ?>
                          </h1>
                        </div>

                        <article class="article">

                        <?php the_content(); ?>
                        </article>
                    <br />
                    <br />
                </div>
            </div>
        </div>

    <?php endwhile;?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>
