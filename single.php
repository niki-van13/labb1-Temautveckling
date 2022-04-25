<?php 
get_header();
?>
<main>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">

									<h1>
                                    <?php the_title();  //hämtar title ?>
                                    </h1>

									<p>
                                    <?php the_content(); //hämtar text ?>
                                    </p>

								</div>
							
						</div>
					</div>
				</div>
			</section>
		</main>
<?php 
get_footer(); //hämtar footer 
?>