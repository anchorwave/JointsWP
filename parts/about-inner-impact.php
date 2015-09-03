<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
		<header class="article-header">
			<h2><?php the_title(); ?></h2>
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="articleBody">
			<div class="row">
				<div class="<?php super_grid( 0,20,20, "about-inner-polished-content" ); ?>">
					<a href="<?php the_permalink() ?>"><?php the_featured_image(); ?></a>
				</div>
				<div class="<?php super_grid( 0,40,40, "about-inner-polished-content" ); ?>">
					<?php the_content('<button class="tiny">Read more...</button>'); ?>
				</div>
			</div>
			<div class="members-grid">
				<h2 class="text-center">Our Team</h2>

				<?php $avatars = array(
					array( "http://api.adorable.io/avatars/285/1", "Bobby Lee", "Possimus repellat dolorum sint velit beatae at esse, vitae quo laboriosam sequi, officiis nisi eum sapiente veritatis mollitia quos impedit provident dolor!"),
					array( "http://api.adorable.io/avatars/285/2", "James Earl", "Error enim, repellat tempore explicabo libero rerum sapiente id. Et ipsa vitae aspernatur accusantium, doloribus, ad dolores assumenda, deserunt ducimus, molestias similique?"),
					array( "http://api.adorable.io/avatars/285/3", "Quintin Euphrates", "Fugiat a quam itaque magni quia nam accusamus iure harum, neque nesciunt non sequi, aut quo quisquam dolorum at minus repellendus obcaecati."),
					array( "http://api.adorable.io/avatars/285/4", "Sylvester Shalom", "Delectus amet laudantium nam repellat, commodi magni aliquam sit dolore porro, iure, excepturi, non fuga hic ipsa architecto nisi molestiae ipsam. Voluptatem!"),
					array( "http://api.adorable.io/avatars/285/5", "Django Jefferson", "Recusandae voluptatem ea corporis at, dicta beatae voluptatibus, quidem quos veritatis dolorum inventore earum qui dolore unde ratione voluptates facere neque ipsam?"),
					array( "http://api.adorable.io/avatars/285/6", "Elias Robert", "Suscipit quae quis qui est ut sunt ipsam amet, maxime, voluptatibus eos tenetur fugiat, possimus laudantium doloremque? Dolores iusto dolorem explicabo odit?"),
					array( "http://api.adorable.io/avatars/285/7", "Smith Johnson", "Nam maxime aut quidem ullam repellat dolorem eius tenetur nihil, earum laudantium veritatis perferendis excepturi tempore suscipit pariatur adipisci perspiciatis! Omnis, enim."),
					array( "http://api.adorable.io/avatars/285/8", "Ser Roderick", "Commodi quo itaque quia labore illo nisi, autem debitis harum quas eligendi officiis ullam tempore sunt neque minima, veniam, maiores fuga repudiandae!"),
					array( "http://api.adorable.io/avatars/285/9", "Frank Overwood", "Neque tempore, odit sit ullam, labore non ad vel rem provident quisquam illum 	aperiam officiis nulla adipisci nam deleniti, illo aut voluptas."),
					array( "http://api.adorable.io/avatars/285/10", "Clint Westwood", "Similique fugit est minima. In atque facere velit nemo corrupti, quibusdam autem? Veniam expedita ea harum vitae asperiores doloribus quos, at sequi."),
				); ?>

				<?php $itemcount = 0; ?>
				<?php $rowcount = 0; ?>
				<?php $lastindex = count($avatars) - 1; ?>
				<?php foreach ( array_chunk($avatars, 4) as $avatargroup ) { ?>
					<div class="row" data-equalizer>
					
					<?php foreach ( $avatargroup as $value ){ ?>
						<div class="<?php super_grid( 0, 3, 3, 'about-inner-our-team'); ?> <?php echo ( $itemcount == $lastindex ) ? "end" : ""; ?>">
							<div class="th" data-equalizer-watch>
								<img src="<?php echo $value[0]; ?>" class="aligncenter" alt="">
								<div class="caption">
									<h4><?php echo $value[1]; ?></h4>
									<p><?php echo $value[2]; ?></p>
									<a href="#" class="button tiny expand split">View More <span data-dropdown="drop-<?php echo $itemcount; ?>"></span></a>
									<ul id="drop-<?php echo $itemcount; ?>" class="f-dropdown" data-dropdown-content>
										<li><a href="#viewinstagram">View Instagram</a></li>
										<li><a href="#share">Share</a></li>
										<li><a href="#report">Report this user</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php $itemcount++; ?>
					<?php } ?>
					<?php $rowcount++; ?>
					</div>

				<?php } ?>
			</div>
			<div class="logo-slider">
				<h2 class="text-center">Community Involvment</h2>
				<div class="slick slick-basic" data-slickslidestoshow=5 data-slickarrows=true data-slickdraggable=true>
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
			<div class="timeline">
				<style>
				.years-select-slider .slick-current {
					border-bottom: 3px solid #aaa;
				}
				</style>
				<ul class="slick slick-basic years-select-slider" data-slickasnavfor=".years-details-slider" data-slickslidestoshow=10 data-slickslidestoscroll=5  data-slickcentermode=true data-slickarrows=true data-slickdraggable=true data-slickinfinite=false data-slickfocusonselect=true>
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
		<footer class="article-footer">
	    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		</footer> <!-- end article footer -->				    						
	</article> <!-- end article -->

<?php endwhile; ?>	
					
<?php joints_page_navi(); ?>

<?php else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>