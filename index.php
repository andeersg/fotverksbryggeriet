<?php get_header(); ?>

<section class="page page--frontpage">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10 col-md-offset-2 col-md-8">
                <article class="beer">
                    <div class="row">
                        <div class="col-lg-10">
                            <h1 class="beer__heading_list">
                                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

                            </h1>
                        </div>
                        <div class="col-lg-2">

                            <div class="beer-type">
                                <?php
                                    
                                    $beertype_args = array('orderby' => 'term_order');
                                    $beer_types = wp_get_post_terms( $post->ID, 'beer_type', $beertype_args );
                                    
                                    foreach( $beer_types as $beer_type ) {
                                      /*  echo '<a href="' . get_term_link( $beer_type ) . '">' . $beer_type->name . '</a>'; */
                                        echo '<div>' . $beer_type->name . '</div>';
                                    }
                                ?>
                            </div>

                        </div>
                    </div>

                    <br />

                    <div class="beer-cork">
                        <?php
                            $beercolor_args = array('orderby' => 'term_order');
                            $cork_colors = wp_get_post_terms( $post->ID, 'cork_color', $beercolor_args );
                            foreach( $cork_colors as $cork_color ) {
                                /* echo '<a href="' . get_term_link( $cork_color ) . '">' . $cork_color->name . '</a>'; */
                                echo '<strong>Korkfarge</strong>: ' . $cork_color->name;
                            }                                    
                        ?>
                    </div>

                </article>
                <br />
            </div>
        </div>
    </div>
    <?php endwhile;?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>
