<?php get_header(); ?>

<article class = "page-content-wrapper">
<?php if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
	
	
		<h1 class = "page-title"><?php the_title(); ?></h1>
    <section class = "page-content">
			<?php the_content(); ?>
		</section>
      

<?php endwhile;
    else :
        echo '<p>No Content</p>';
    endif; ?>

	</article>


<?php get_footer(); ?>