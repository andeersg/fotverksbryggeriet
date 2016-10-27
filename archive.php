<?php get_header(); ?>

<?php //is_tag(); ?>
<?php if (have_posts()) : ?>

<section class="page page--archive">

    <header class="article__header">
            <br />
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                    <?php /* If this is a category archive */ if (is_category()) { ?>
                    <h1 class="article__heading" style="padding: 0 15%">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; category</h1><br />
                    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h1 class="article__heading" style="padding: 0 15%">Posts tagged with &#8216;<?php single_tag_title(); ?>&#8217;</h1><br />
                    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h1 class="article__heading" style="padding: 0 15%">Archive for <?php the_time('F jS, Y'); ?></h1><br />
                    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h1 class="article__heading" style="padding: 0 15%">Archive for <?php the_time('F, Y'); ?></h1><br />
                    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h1 class="article__heading" style="padding: 0 15%">Archive for <?php the_time('Y'); ?></h1><br />
                    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <h1 class="article__heading" style="padding: 0 15%">Author archive</h1><br />
                    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <h1 class="article__heading" style="padding: 0 15%">Blog archives</h1><br />
                    <?php } ?>

                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts($query_string . '&showposts=20paged=' . $paged);
                    ?>
                </div>
            </div>
        </div>
    </header>


    <br />
    <br />
    <br />
    <br />


    <div class="container">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">

                <?php while (have_posts()) : the_post(); ?>

                <article class="article" <?php post_class() ?>>
                    <small><?php the_time('d F y'); ?> in <?php the_category(', ') ?></small><br />
                    <a class="title" style="border: 0 !important" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>                   
                    <br /><br /><br />
                </article>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
</section>

<!--pagination-->
<aside class="pagination">
    <?php
         global $wp_query;
        
        $big = 999999999; // need an unlikely integer
        
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
                'prev_text' => '&larr;',  
                'next_text' => '&rarr;', 
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    ?>
</aside>
<!--pagination-->
<?php endif; ?>

<?php get_footer(); ?>
