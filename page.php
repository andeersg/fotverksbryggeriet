<?php get_header(); ?>

<section class="page page--single">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>


    <article class="article">
        <header class="article__header">
            <br />
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                        <h1 class="article__heading">
                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        <br />
        <br />

        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">

                    <section class="article__body-text" id="post-<?php the_ID(); ?>">
                        <?php the_content(); ?>
                    </section>

                    <br />
                    <br />
                </div>
            </div>
        </div>
    </article>
    <br />
    <br />
    <hr />
    <br />
    <br />
    <?php endwhile;?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>
