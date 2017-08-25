<?php get_header(); ?>



    <div class ="content-grid">
    
    <?php $about_query = new WP_Query( array( 'post_type' => 'page', 'name' => 'About' ) ); ?>

    <?php if ($about_query -> have_posts()) :
        while ($about_query -> have_posts()) : $about_query -> the_post(); ?>
             
            <?php $bgImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?> 

              <a href="<?php echo the_permalink(); ?>">  
                <div class="content-grid__about content-grid__box " id="<?php echo $post->ID; ?>" style="background-image: url(<?php echo $bgImage[0];?>)">  
                    <p><?php the_excerpt(); ?></p>
                </div>
              </a> 
              
        <?php endwhile;

        else :
            echo '<p>No About post</p>';
        endif; ?>

       
    <?php $page_query = new WP_Query( array( 'post_type' => 'page', 'post__not_in' => array(33)) ); ?>

    <?php if ($page_query->have_posts()) :
        while ($page_query->have_posts()) : $page_query->the_post(); ?>
             
            <?php $bgImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?> 

              <a href="<?php echo the_permalink(); ?>">  
                <div class="content-grid__box" id="<?php echo $post->ID; ?>" style="background-image: url(<?php echo $bgImage[0];?>)">  
                    <h1 class="title-is-hidden"><?php the_title(); ?></h1>
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
