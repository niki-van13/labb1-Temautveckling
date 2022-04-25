<?php get_header(); ?> <!-- hämtar header -->
<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<?php
					while (have_posts()) {
						the_post(); 
					
					?>
					<div class="text">
						<h1><?php the_title(); ?></h1> <!-- hämtar titeln -->
						<?php the_content(); ?> <!-- hämtar text -->
					
					</div>
				</div>
				<?php 
				} 
				?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?> <!-- hämtar footern -->

