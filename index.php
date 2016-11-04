<?php get_header(); ?>

<section class="page page--frontpage">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="row" style="padding-left: 20px">
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                <article class="beer">
                    <div class="row">

                            <h1 class="beer__heading_list">
                                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                            </h1>

                            <!-- ØLTYPE -->
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

                            <!-- METADATA -->
                            <ul class="beer-meta-list">
                              <!-- BRYGGEDATO - HUSK Å ENDRE KODE HER TIL BRYGGEDATO.. -->
                              <li class="beer-meta-list-item">
                                <p>
                                    <?php
                                        $beercolor_args = array('orderby' => 'term_order');
                                        $cork_colors = wp_get_post_terms( $post->ID, 'cork_color', $beercolor_args );
                                        foreach( $cork_colors as $cork_color ) {
                                          echo '<strong>Bryggedato</strong>: ' . $cork_color->name;
                                        }
                                    ?>
                                  </p>
                              </li>

                              <!-- KORKFARGE -->
                              <li class="beer-meta-list-item">
                                <p>
                                    <?php
                                        $beercolor_args = array('orderby' => 'term_order');
                                        $cork_colors = wp_get_post_terms( $post->ID, 'cork_color', $beercolor_args );
                                        foreach( $cork_colors as $cork_color ) {
                                          echo '<strong>Korkfarge</strong>: ' . $cork_color->name;
                                        }
                                    ?>
                                  </p>
                              </li>

                              <!-- ØLSTYRKE  -->
                              <li class="beer-meta-list-item">
                                <p>
                                    <?php
                                        $beer_strength = beer_strength_get_meta( 'beer_strength' );
                                        echo '<strong>Ølstyrke</strong>: ' . $beer_strength . '';
                                    ?>
                                  </p>
                              </li>

                            </ul>

                    </div>
                    <hr>

                </article>

            </div>
        </div>
    </div>
    <?php endwhile;?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>
