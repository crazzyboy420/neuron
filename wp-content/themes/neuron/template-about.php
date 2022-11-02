<?php
/*
Template Name: About template
*/
$enabling_about_area_promo = cs_get_option('enabling_about_area_promo');
$enabling_about_content = cs_get_option('enabling_about_content');
$about_title = cs_get_option('about_title');
$about_content_text = cs_get_option('about_content_text');
$about_content_img = cs_get_option('about_content_img');
$about_content_img_array = wp_get_attachment_image_src(cs_get_option('about_content_img'));
if(!empty($about_content_img)){
    $about_content_img = $about_content_img_array[0];
}else{
    $about_content_img = ''.get_template_directory_uri().'/assets/img/about-us-block.jpg';
}
get_header();
?>

<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
    <?php while ( have_posts() ) :the_post();?>
		<section <?php if(has_post_thumbnail()):?> style="background:url(<?php the_post_thumbnail_url('large');?>)" <?php endif;?> class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2><?php the_title();?></h2>
							<p><a href="<?php echo site_url();?>">Home</a> /<?php the_title();?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->
		
<?php if($enabling_about_content == 1):?>
<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
		<section class="block about-us-block section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<!-- block text -->
						<div class="block-text">
							<h2><?php echo $about_title;?></h2>
							<?php echo wpautop($about_content_text);?>
						</div>
					</div>
					<div class="col-md-6">
						<!-- block image -->
						<div class="block-img">
							<img src="<?php echo $about_content_img;?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
		<?php endif;?>
		
		<?php if($enabling_about_area_promo == 1){
          get_template_part('content/promo');
    
         } ?>
	
		<section class="accordian-section section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="accorian-item">

							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							 	<?php 
                                    $faqs = cs_get_option('faqs');
                                    $faq_num = 0;
                                    foreach($faqs as $faq):
                                         $faq_num++;
                                        
                                     if($faq_num == 1){
                                         $fa = 'true';
                                         $class = 'in';
                                     }else{
                                         $fa = 'false';
                                         $class = '';
                                 }
                                 ?>
						
								<!-- accordian item-<?php echo $faq_num;?> -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading-<?php $faq_num;?>">
										<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $faq_num;?>" aria-expanded="<?php echo $fa;?>" aria-controls="collapse-<?php echo $faq_num;?>">
								        <?php echo $faq['faqs_title'];?>
										</a>
										</h4>
									</div>
									<div id="collapse-<?php echo $faq_num;?>" class="panel-collapse collapse <?php echo $class;?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_num;?>">
										<div class="panel-body">
											<?php echo wpautop($faq['faqs_content']);?>
											<h1></h1>
										</div>
									</div>
								</div>
								<?php endforeach;?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- accordian right text block -->
						<div class="accordian-right-content">
							<h2>Know More About Us</h2>
							<p>Intrinsicly synergize end-to-end results after robust models. Enthusiastically initiate wireless solutions via leading-edge users. Phosfluorescently repurpose world-class networks whereas bleeding-edge communities. Intrinsicly generate just in time infomediaries with resource maximizing deliverables. Credibly disintermediate collaborative ideas through visionary methods of empowerment.</p>
							<p>Globally reintermediate team building best practices with mission-critical "outside the box" thinking. Efficiently mesh synergistic manufactured products rather than turnkey e-commerce. Globally drive.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php endwhile;?>
<?php get_footer();?>