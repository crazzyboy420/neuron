<?php get_header(); ?>

<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
<?php 
while ( have_posts() ) :the_post();
 

$work = get_post_meta(get_the_Id(),'neuron_work_meta',true);

if(array_key_exists('sub_title',$work)){
    $sub_title = $work['sub_title'];
}else{
    $sub_title = '';
}
if(array_key_exists('link_text',$work)){
    $link_text = $work['link_text'];
}else{
    $link_text = 'Vist Website';
}
if(array_key_exists('link',$work)){
    $link = $work['link'];
}else{
    $link = '';
}
if(array_key_exists('big_preview',$work)){
    $big_preview = $work['big_preview'];
}else{
    $big_preview = '';
}
if(array_key_exists('informations',$work)){
    $informations = $work['informations'];
}else{
    $informations = array();
}
?>
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
		
	
	<!-- start portfolio single -->
	<section class="single-portfolio-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">
					<?php if(!empty($big_preview)):?>
					<?php $big_preview_img = wp_get_attachment_image_src($big_preview,'large');?>
						<img class="img-responsive" src="<?php echo $big_preview_img[0];?>" alt="" />
						<?php else: the_post_thumbnail('large');?>
						<?php endif;?>
					</div>
				</div>
				<div class="col-md-4">
					<!-- single portfolio info -->
					<div class="single-portfolio-inner">
						<header class="single-portfolio-title">
							<a><?php echo $sub_title;?></a>
							<h2><?php the_title();?></h2>
						</header>
						<div class="portfolio-details-panel">
							<?php the_content();?>
							
							<ul class="portfolio-meta">
							<?php if(!empty($informations)): foreach($informations as $information):?>
							     <li><span><?php echo $information['title']?></span> <?php echo $information['value']?></li>
							<?php endforeach; endif;?>
								<li><span> Share </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<?php if(!empty($link)):?>
						<a class="btn btn-primary" href="<?php echo $link?>"> <?php echo $link_text;?> </a>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>
		<?php endwhile;?>
<?php get_footer();?>