<?php 
$services_title = cs_get_option('services_title');
$services_content = cs_get_option('services_content');
?>
<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
<section class="section-padding <?php if(is_page(10)):?><?php else:?>darker-bg<?php endif;?>">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="template-title text-center">
                    <h2><?php echo $services_title;?></h2>
                    <?php echo wpautop($services_content);?>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- single service -->
             <?php global $post;
            $args = array( 'post_type'=> 'services', 'posts_per_page' => 6, 'orderby' => 'menu_order', 'order' => 'ABS'); 
            $myposts = get_posts($args); 
            foreach($myposts as $post): setup_postdata($post);?>
            <?php $link = get_post_meta($post -> ID,'link',true);?>
            <div class="col-sm-6 col-md-4">
                <div class="services-tiem">
                    <?php the_post_thumbnail('thumbnail',array('class' => 'hvr-buzz-out'));?>
                    <h3><a href="$link"><?php the_title();?></a></h3>
                   <?php the_content();?>
                </div>
            </div>
            <?php endforeach; wp_reset_query(); ?>
        </div>
    </div>
</section>
<!-- end services section -->
