<?php
     // Do not delete these lines    
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
    
    if ( post_password_required() ) {
        return;
    }	 
?>

<!-- you can start editing here. -->
<?php if ($comments) : ?>
<?php else : // this is displayed if there are no comments so far ?>
<?php endif; // ends if comments ?>


<section class="comment-form">
    <h2 class="comment-form__title">Leave feedback</h2>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

        <p>If you have any feedback, leave a message below. Thanks!</p>
        <p>Fields marked with * are required. Email addresses are never shared.</p>

        <br />

        <p><input class="comment-form__field" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" placeholder="Your name *"></p>

        <p><input class="comment-form__field" type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" placeholder="Your email *"></p>

        <p><input class="comment-form__field" type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" placeholder="Your website"></p>

        <br />
        <textarea name="comment" id="comment" rows="10" tabindex="4" placeholder="Your comment"></textarea>
        <p><input class="comment-form__submit" class="pull-right" name="submit" type="submit" tabindex="5" value="SUBMIT" /><?php comment_id_fields(); ?></p>

        <?php do_action('comment_form', $post->ID); ?>

    </form>


</section>

<?php endif; // if you delete this the sky will fall on your head ?>
