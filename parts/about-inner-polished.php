<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
		<header class="article-header">
			<h2><?php the_title(); ?></h2>
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="articleBody">
			<div class="row">
				<div class="<?php super_grid( 0,4,4, "about-inner-polished-content" ); ?>">
					<a href="<?php the_permalink() ?>"><?php the_featured_image(); ?></a>
				</div>
				<div class="<?php super_grid( 0,8,8, "about-inner-polished-content" ); ?>">
					<?php the_content('<button class="tiny">Read more...</button>'); ?>
				</div>
			</div>
			<div class="testimonials">
				<h2 class="text-center">Testimonials</h2>
				<h4 class="text-center subheader"><small>Things</small> people say <small>about us</small></h4>
				<div class="slick slick-basic" data-slickinfinite="true" data-slickautoplay="true" data-slidestoscroll="1" data-slickslidestoshow="1" data-slickdots="true" data-slickdraggable="true" data-slickarrows="true" data-slickcentermode="false" data-slickcenterpadding="50px" data-slickcssease="ease" data-slickfade="true" data-slickfocusonselect="true" data-slickpauseonhover="true" data-slickpauseondotshover="true" data-slickspeed="1000" data-slicktouchmove="false">
					<div class="single-testimonial">
						<blockquote>
							"This is a great company, I can't believe the service I recieved. It was incredible. I asked them to do something and they said they would do it if I paid them a certain amount, and then they I agreed and they did what they said they would I and I paid them what I said it was."
						</blockquote>
						-Anchor Theme
					</div>
					<div class="single-testimonial">
						<blockquote>
							"It was good."
						</blockquote>
						-JointsWP
					</div>
				</div>
			</div>
			<div class="members-slider">
				<h2 class="text-center">Meet our team</h2>
				<style>
				.slick-prev:before, .slick-next:before {
					color: black;
				}
			</style>
				<div class="slick slick-basic" data-slickinfinite="true" data-slickautoplay="true" data-slidestoscroll="5" data-slickslidestoshow="5" data-slickdots="true" data-slickdraggable="true" data-slickarrows="true" data-slickcentermode="false" data-slickcenterpadding="15%" data-slickcssease="ease" data-slickfade="false" data-slickfocusonselect="true" data-slickpauseonhover="true" data-slickpauseondotshover="true" data-slickspeed="190" data-slicktouchmove="false">
				<?php $avatars = array(
						"http://api.adorable.io/avatars/285/1","http://api.adorable.io/avatars/285/2","http://api.adorable.io/avatars/285/3","http://api.adorable.io/avatars/285/4","http://api.adorable.io/avatars/285/5","http://api.adorable.io/avatars/285/6","http://api.adorable.io/avatars/285/7","http://api.adorable.io/avatars/285/8","http://api.adorable.io/avatars/285/9","http://api.adorable.io/avatars/285/10",
					); ?>
					<?php foreach ($avatars as $value) { ?>
						<div class="slide">
							<img src="<?php echo $value; ?>" class="aligncenter" alt="">
						</div>
					<?php } ?>

				</div>
			</div>
			<div class="slick-nav cf"></div>
		</section> <!-- end article section -->


							
		<footer class="article-footer">
	    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		</footer> <!-- end article footer -->				    						
	</article> <!-- end article -->

<?php endwhile; ?>	
					
<?php joints_page_navi(); ?>

<?php else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>