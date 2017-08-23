<?php get_header(); ?>



    <div class ="content-grid">
    <?php $page_query = new WP_Query( array( 'post_type' => 'page' ) ); ?>

    <?php if ($page_query->have_posts()) :
        while ($page_query->have_posts()) : $page_query->the_post(); ?>
             
            <?php $bgImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?> 

              <a href="<?php echo the_permalink(); ?>">  
                <div class="content-grid__box" id="<?php echo $post->ID; ?>" style="background-image: url(<?php echo $bgImage[0];?>)">  
                    <h1><?php the_title(); ?></h1>
                </div>
              </a>  
        <?php endwhile;

        else :
            echo '<p>No Content</p>';
        endif; ?>
        <div class="content-grid__box box__title">
            <h1 class="content-grid__title"></h1>
        </div>
    </div> <!-- .content-grid ENDS... -->



<?php get_footer(); ?>
