<?php /* Template Name: All Beers */ ?>
<?php get_header(); ?>

<section class="page page--frontpage">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="row" style="padding-left: 20px">
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">

                <div class="row">
                    <div class="search-heading">Søk etter øl</div>
                </div>
                <div class="row search-input-submit">
                    <input class="main-search-input" type="text" name="" value="" maxlength="100" />
                    <input class="button-primary button-primary--medium" type="submit" name="" value="Søk" maxlength="100" />
                </div>

                <article class="beer">
                    <div class="row">

                        <?php
                            $posts = get_posts(array(
                              'posts_per_page'	=> -1,
                              'post_type'			=> 'post',
                              'meta_key'			=> 'bryggedato',
                                'orderby'			=> 'meta_value_num',
                                'order'		    => 'DESC'
                            ));

                            if( $posts ):
                        ?>

                        <?php
                            foreach( $posts as $post ):
                                setup_postdata( $post )
                        ?>

                        <!-- ALL POSTS -->
                        <h1 class="beer__heading_list">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h1>

                        <!-- ØLTYPE -->
                        <div class="beer-type">
                            <svg class="beer-type-icon" width="23px" height="24px" viewbox="-2 138 23 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0.000000, 139.243243)" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline id="Stroke-430" stroke="#E0CF00" stroke-width="2" points="9.72972973 0.810810811 19.6075676 10.9745946 10.4340541 20.1481081 0.540540541 10"></polyline>
                                    <polyline id="Stroke-431" stroke="#E0CF00" stroke-width="2" points="0.540540541 10 0 0.27027027 9.72972973 0.810810811"></polyline>
                                    <path d="M7.04383784,6.74048649 C7.24275676,6.93940541 7.19140541,7.29237838 6.97140541,7.51237838 C6.75140541,7.73237838 6.41248649,7.74967568 6.21356757,7.55075676 C6.01464865,7.35183784 6.03194595,7.01291892 6.25194595,6.79291892 C6.47194595,6.57291892 6.84491892,6.54156757 7.04383784,6.74048649 L7.04383784,6.74048649 Z" id="Stroke-432" stroke="#E0CF00" stroke-width="4"></path>
                                </g>
                            </svg>
                            <?php the_field('øltype'); ?>
                        </div>

                        <!-- METADATA -->
                        <ul class="beer-meta-list">

                            <li class="beer-meta-list-item">
                                <p><strong>Bryggedato:</strong>
                                    <?php the_field('bryggedato'); ?>
                                </p>
                            </li>

                            <!-- KORKFARGE -->
                            <li class="beer-meta-list-item">
                                <p><strong>Korkfarge:</strong>
                                    <?php the_field('korkfarge'); ?>
                                </p>
                            </li>

                            <!-- ØLSTYRKE  -->
                            <li class="beer-meta-list-item">
                                <p><strong>Ølstyrke:</strong>
                                    <?php the_field('ølstyrke'); ?>
                                </p>
                            </li>

                        </ul>
                        <hr>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>


                    </div>

                </article>

            </div>
        </div>
    </div>
    <?php endwhile;?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>
