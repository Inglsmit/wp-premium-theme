<?php get_header( ) ?>

<?php if ( have_posts() ){ ?>
	<?php while ( have_posts() ){ ?>
		<?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink() ?>" tite="<?php the_title_attribute( ) ?>"><?php the_title( ) ?></a>
        </h2>
        <div>
            <?php firsttheme_post_meta(); ?>
        </div>
		<?php  ?>

	<?php } ?>
<?php } else { ?>
	<p>Sorry, no post.</p>
<?php } ?>

<?php get_footer( ) ?>