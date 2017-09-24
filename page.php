<?php get_template_part('page-header'); ?>

<article class="page-content">
<?php if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
    <?php $bgImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?> 
    <div class="page-content__hero" style="background-image: url(<?php echo $bgImage[0];?>)">
        <h1 class="page-content__title"><?php the_title(); ?></h1>
    </div>
    
	
    
    
    <section class="page-content__post">
		<?php the_content(); ?>
	</section>
      

    <?php endwhile;
    else :
        echo '<p>No Content</p>';
    endif; ?>

	</article>


<?php get_footer(); ?>