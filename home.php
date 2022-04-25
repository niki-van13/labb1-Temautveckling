<?php 
//hämtar header
    get_header(); 
    ?>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
							
							<?php //start loopen
    				    	while(have_posts()) {
        	    				the_post();
    				    	?>
							<article>
								<?php the_post_thumbnail();  //hämtar bilden?>

								<h2 class="title">
								<a href="<?php the_permalink(); // link i title  ?>">
                                    <?php the_title();  //hämtar title ?> 
                                    </a>
						
								</h2>
								<ul class="meta">
									<li>
                                        <?php echo get_the_date( );//hämtar date ?> 
									</li>
									<li>
										<?php the_author_posts_link(); ?> 
										</a>
									</li>
									<li>
									
								
                                        <?php the_category(', '); ?> 
									</li>
								</ul>
								<p>
									
                                    <?php the_excerpt();//avsluta loopen ?> 
                                </p>
							</article>

                            <?php } ?>

							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
							
								<ul>
									<li>
										<form id="searchform" class="searchform">
										<?php
											get_search_form(); //hämtar search form 
										?>
											
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="">Blogg</a>
											</li>
											<li class="page_item">
												<a href="">Exempelsida</a>
											</li>
											<li class="page_item">
												<a href="">Kontakt</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="">Om mig</a>
												<ul class="children">
													<li class="page_item">
														<a href="">Intressen</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Projekt 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="">Startsida</a>
											</li>
										</ul>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<a href="<?php echo get_post_type_archive_link(''); ?>">oktober 2016</a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
											<li class="cat-item">
												<a href="">Natur</a> (1)
											</li>
											<li class="cat-item">
												<a href="">Okategoriserade</a> (3)
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>


    <?php
    get_footer(); //hämtar footer 
    ?>


	</div>

	<script src="<?php echo get_template_directory_uri() .'./js/script.js'; ?>"></script>          

</body>
</html>