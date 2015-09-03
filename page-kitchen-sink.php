<?php 
/**
 * Template Name: Kitchen Sink
 */
?>
<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="" role="main">
				    	
						<section class="members-slider">

							<h3>Slick Slideshow</h3>

							<p>Below is an example of slick slideshow. Data attributes on the parent element can be used to set various options, but not all are programmed in. Inspect the code for the available options.</p>

							<pre>
								<?php $slickmarkup = '<div class="slick-example slick slick-basic" data-slickinfinite="true" data-slickautoplay="true" data-slidestoscroll="5" data-slickslidestoshow="5" data-slickdots="true" data-slickdraggable="true" data-slickarrows="true" data-slickcentermode="false" data-slickcenterpadding="15%" data-slickcssease="ease" data-slickfade="false" data-slickfocusonselect="true" data-slickpauseonhover="true" data-slickpauseondotshover="true" data-slickspeed="190" data-slicktouchmove="false">'; ?>
								<?php echo htmlspecialchars( $slickmarkup ); ?>
							</pre>
							<h2 class="text-center">Meet our team</h2>
							<style>
								.slick-example:hover .slick-prev:before, .slick-example:hover .slick-next:before {
									color: #333;
								}
								.slick-example .slick-prev:before, .slick-example .slick-next:before {
									color: whitesmoke;
								}
							</style>
							<div class="slick-example slick slick-basic" data-slickinfinite="true" data-slickautoplay="true" data-slidestoscroll="5" data-slickslidestoshow="5" data-slickdots="true" data-slickdraggable="true" data-slickarrows="true" data-slickcentermode="false" data-slickcenterpadding="15%" data-slickcssease="ease" data-slickfade="false" data-slickfocusonselect="true" data-slickpauseonhover="true" data-slickpauseondotshover="true" data-slickspeed="190" data-slicktouchmove="false">
							<?php $avatars = array(
									"http://api.adorable.io/avatars/285/1","http://api.adorable.io/avatars/285/2","http://api.adorable.io/avatars/285/3","http://api.adorable.io/avatars/285/4","http://api.adorable.io/avatars/285/5","http://api.adorable.io/avatars/285/6","http://api.adorable.io/avatars/285/7","http://api.adorable.io/avatars/285/8","http://api.adorable.io/avatars/285/9","http://api.adorable.io/avatars/285/10",
								); ?>
								<?php foreach ($avatars as $value) { ?>
									<div class="slide">
										<img src="<?php echo $value; ?>" class="aligncenter" alt="">
									</div>
								<?php } ?>

							</div>
						</section>
						<section>
								
					    	<h3>Horizontal Timeline</h3>
					    	<p>Timeline uses two slick slideshows in sync to display dates and respective data.</p>
							<p>In this example <code>.slick-current</code> has been styles to underline the seleted year on the first slideshow.</p>
							<div class="timeline">
								<style>
								.years-select-slider .slick-current {
									border-bottom: 3px solid #aaa;
								}
								</style>
								<ul class="slick slick-basic years-select-slider" data-slickasnavfor=".years-details-slider" data-slickslidestoshow=10 data-slickslidestoscroll=5 data-slickarrows=true data-slickdraggable=true data-slickinfinite=false data-slickfocusonselect=true>
									<?php $years = array( "1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013", ); ?>
									<?php foreach ($years as $year) { ?>
										<li class="text-center">
											<a href="#tab-year-<?php echo $year; ?>"><?php echo $year; ?></a>
										</li>
									<?php } ?>
								</ul>
								<div class="slick slick-basic years-details-slider" data-slickasnavfor=".years-select-slider" data-slickinfinite=false>
									<?php foreach ($years as $year) { ?>
										<div class="panel">
											<h5>More about the year <?php echo $year; ?></h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos blanditiis, autem nesciunt, molestias ratione quasi mollitia illum eligendi ullam dolorum veritatis nostrum minus id necessitatibus non cum eius dolore! Repudiandae.</p>
										</div>
									<?php } ?>
								</div>
							</div>
						</section>
								
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>