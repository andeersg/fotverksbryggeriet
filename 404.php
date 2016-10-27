<?php get_header(); ?>


<section class="page fournullfour">
    <article class="article">
        <header class="article__header"><div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                        <h1 class="article__heading">Error 404: Page not found</h1>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">

                    <br />
                    <br />
                    <p>The page you were looking for was not found. <br />Try searching for it?</p>
                    <br />
                    <br />
                    <!--search-->
                    <?php $search_text = "SEARCH"; ?>
                    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                        <label>Search</label>
                        <input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '')
		{this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>')
		{this.value = '';}" />
                        <input type="hidden" id="searchsubmit" />
                    </form>
                    <!--search-->
                </div>
            </div>
        </div>
    </article>

</section>

<?php get_footer(); ?>