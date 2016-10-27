<?php get_header(); ?>

<section class="page page--single">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>



    <div class="container">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">

              <section class="beer-title">
                <h1 class="beer__heading"><?php the_title(); ?></h1>
              </section>


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

                <section class="beer">

                    <h2>Bryggmester: </h2>

                    <article class="beer__body-text" id="post-<?php the_ID(); ?>">
                        <?php  the_content(); ?>
                    </article>

                    <br />
                    <br />
                    <!--beer details-->
                    <aside class="beer__metadata">
                        <?php
                            $beercolor_args = array('orderby' => 'term_order');
                            $beer_colors = wp_get_post_terms( $post->ID, 'beer_color', $beercolor_args );


                                foreach( $beer_colors as $beer_color ) {
                                    /* echo '<a href="' . get_term_link( $beer_color ) . '">' . $beer_color->name . '</a>'; */
                                    echo '<div>Korkfarge: ' . $beer_color->name . '</div>';
                                }

                        ?>
                    </aside>
                    <!--beer details-->
                </section>
            </div>
        </div>
    </div>

    <br />
    <br />
    <br />
    <br />
    <?php endwhile;?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>
