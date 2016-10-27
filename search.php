<?php get_header(); ?>

<?php if (have_posts()) : ?>

<section class="page search">
    <section class="article">
        <header class="article__header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                        <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            query_posts($query_string . '&showposts=5&paged=' . $paged);
                        ?>
                        <h1 class="article__heading">Search results for &#8216;<?php the_search_query(); ?>&#8217;</h1>
                        <br />
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                    <br />
                    <br />

                    <?php while (have_posts()) : the_post(); ?>

                    <small><?php the_time('d F Y'); ?> in <?php the_category(', ') ?></small><br />
                    <a class="title" style="border: 0 !important" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                    <br /><br /><br />


                    <?php endwhile; ?>

                    <!--navigation-->
                    <section class="pagination">
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
                    </section>
                    <!--navigation-->
                </div>
            </div>
        </div>
    </section>
</section>
<?php else : ?>
<section class="page search">
    <section class="article">
        <header class="article__header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                        <h1 class="article__heading">No content found with that search word. <br />Try a different search?</h1>
                        <br />
                    </div>
                </div>
            </div>
        </header>
        <br />
        <br />
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                    <div class="aligncenter">
                        <!--search-->
                        <div class="search-form">
                            <?php $search_text = "Search"; ?>
                            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                                <input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '')
	{this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>')
	{this.value = '';}" />
                                <input type="hidden" id="searchsubmit" />
                            </form>
                        </div>
                        <!--search-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<?php endif; ?>

<?php get_footer(); ?>
