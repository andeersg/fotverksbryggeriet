<?php get_header(); ?>

<section class="page page--single">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>



    <div class="container">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">

                <div class="beer-title">
                    <h1 class="beer__heading"><?php the_title(); ?></h1>
                </div>

                <div class="beer-type">

                  <svg class="beer-type-icon" width="23px" height="24px" viewBox="-2 138 23 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0.000000, 139.243243)" stroke-linecap="round" stroke-linejoin="round">
                          <polyline id="Stroke-430" stroke="#E0CF00" stroke-width="2" points="9.72972973 0.810810811 19.6075676 10.9745946 10.4340541 20.1481081 0.540540541 10"></polyline>
                          <polyline id="Stroke-431" stroke="#E0CF00" stroke-width="2" points="0.540540541 10 0 0.27027027 9.72972973 0.810810811"></polyline>
                          <path d="M7.04383784,6.74048649 C7.24275676,6.93940541 7.19140541,7.29237838 6.97140541,7.51237838 C6.75140541,7.73237838 6.41248649,7.74967568 6.21356757,7.55075676 C6.01464865,7.35183784 6.03194595,7.01291892 6.25194595,6.79291892 C6.47194595,6.57291892 6.84491892,6.54156757 7.04383784,6.74048649 L7.04383784,6.74048649 Z" id="Stroke-432" stroke="#E0CF00" stroke-width="4"></path>
                      </g>
                  </svg>

                    <?php

                        $beertype_args = array('orderby' => 'term_order');
                        $beer_types = wp_get_post_terms( $post->ID, 'beer_type', $beertype_args );

                        foreach( $beer_types as $beer_type ) {
                          /*  echo '<a href="' . get_term_link( $beer_type ) . '">' . $beer_type->name . '</a>'; */
                            echo $beer_type->name;
                        }

                    ?>
                </div>
                <hr>

                <section class="beer">
                    <div class="row">

                          <!-- Bryggmester -->
                          <div class="col-lg-6">

                                <div class="col-lg-4">
                                  <img class="bryggmester-bilde" src="<?php bloginfo('stylesheet_directory'); ?>/images/peter_profilbilde.png">
                                </div>

                                <div class="col-lg-6">
                                  <h2 class="bryggmester">Bryggmester</h2>
                                  <p>navn her</p>
                                </div>

                          </div>

                          <!-- Metadata -->
                          <div class="col-lg-6">

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

                          </div>
                          <!-- Metadata END -->
                    </div>

                    <hr>
                    <br />

                    <section class="beer__density-measurement">
                        <h2>Tetthetsmåling</h2>
                        <div class="col-lg-6 density-tables-container">
                          <h3>Teoretisk</h3>
                          <table style="width:100%">
                            <tr>
                              <th>OD</th>
                              <th>FD</th>
                              <th>Alc.</th>
                            </tr>
                            <tr>
                              <td>tall1</td>
                              <td>tall2</td>
                              <td>tall3</td>
                            </tr>
                          </table>
                        </div>

                        <div class="col-lg-6 density-tables-container">
                          <h3>Målt</h3>
                          <table style="width:100%">
                            <tr>
                              <th>OD</th>
                              <th>FD</th>
                              <th>Alc.</th>
                            </tr>
                            <tr>
                              <td>tall1</td>
                              <td>tall2</td>
                              <td>tall3</td>
                            </tr>
                          </table>
                        </div>
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
