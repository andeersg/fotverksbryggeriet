</section>
<!--main content-->
<footer class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <?php //dynamic_sidebar( 'bottom_content_left' ); ?>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php //dynamic_sidebar( 'bottom_content_right' ); ?>
            </div>
        </div>
    </div>
</footer>

<!--footer-->
<footer class="footer <?php if (!is_home()) : echo 'footer--with-background'; endif; ?>">
    <nav class="navigation navigation--footer" role="navigation">
        <?php
            
            $defaults = array(
            'theme_location'  => 'typecodefootermenu',
            'container'       => '', 
            'container_class' => '', 
            'echo'            => false,
            'fallback_cb'     => false,
            'items_wrap'      => '%3$s',
            'depth'           => 0
            );
            echo strip_tags(wp_nav_menu( $defaults ), '<a>');
        ?>
    </nav>
    <br />
    <br />
    &copy; 2011 &mdash; <?php echo date('Y'); ?> CRH unless otherwise stated.
</footer>
<!--footer-->
<a href="#top" id="scrolltotop" title="Scroll to top">&uarr;</a>

<?php wp_footer(); ?>

</body>
</html>
