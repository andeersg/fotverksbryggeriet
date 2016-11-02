<?php get_header(); ?>

<section class="page page--single">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>



    <div class="container">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10 col-md-offset-2 col-md-8">

                <div class="beer-title">
                    <h1 class="beer__heading"><?php the_title(); ?></h1>
                </div>

                <div class="beer-type">
                    <?php
                        
                        $beertype_args = array('orderby' => 'term_order');
                        $beer_types = wp_get_post_terms( $post->ID, 'beer_type', $beertype_args );
                        
                        foreach( $beer_types as $beer_type ) {
                          /*  echo '<a href="' . get_term_link( $beer_type ) . '">' . $beer_type->name . '</a>'; */
                            echo $beer_type->name;
                        }
                        
                    ?>
                </div>

                <section class="beer">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Bryggmester: </h2>
                            <br />
                            <br />
                            <!--beer details-->
                            <aside class="beer__metadata">
                                <div class="beer__metadata-item">
                                    <strong>Bryggedato</strong>:
                                </div>
                                <div class="beer__metadata-item">
                                    <?php
                                        
                                        $beer_strength = beer_strength_get_meta( 'beer_strength' );
                                        echo '<strong>Ølstyrke</strong>: ' . $beer_strength . '';
                                    ?>
                                </div>
                                <div class="beer__metadata-item">
                                    <?php
                                        $beercolor_args = array('orderby' => 'term_order');
                                        $cork_colors = wp_get_post_terms( $post->ID, 'cork_color', $beercolor_args );
                                        foreach( $cork_colors as $cork_color ) {
                                            /* echo '<a href="' . get_term_link( $cork_color ) . '">' . $cork_color->name . '</a>'; */
                                            echo '<strong>Korkfarge</strong>: ' . $cork_color->name;
                                        }                                    
                                    ?>
                                </div>
                            </aside>
                            <!--beer details-->
                        </div>
                        <div class="col-lg-6">
                            <!--featured image-->
                            <?php if ( $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ) ) : ?>
                            <figure>
                                <div role="img" aria-label="<?php echo get_post_meta(get_post_thumbnail_id( $post->ID ) , '_wp_attachment_image_alt', true); ?>" class="featured-image" style="background-image: url('<?php echo $featured_image[0]; ?>')"></div>
                            </figure>
                            <?php endif; ?>
                            <!--featured image-->
                        </div>
                    </div>

                    <br />
                    <br />

                    <section class="beer__density-measurement">
                        <h2>Tetthetsmåling</h2>
                    </section>

                    <br />
                    <br />

                    <article class="beer__body-text" id="post-<?php the_ID(); ?>">
                        <?php  the_content(); ?>
                    </article>

                    <br />
                    <br />

                    <?php edit_post_link( "Rediger", $before, $after, $id, "button-action button-action--small" ); ?>
                    <a class="button-action button-action--small" href="<?php echo get_delete_post_link( $id, $deprecated, $force_delete ); ?>">
                        Slett
                    </a>
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
