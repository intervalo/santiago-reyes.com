<table class="cls-table-gallery wpscls-with-content">							<tr>								<td class="wpscls-post-content">									<h2 class="wpscls-field-title"><?php single_cat_title(); ?></h2>									<div class="wpscls-field-content">										<?php echo category_description(); ?>									</div>								</td>							</tr>					<?php if ( have_posts() ) while ( have_posts() ) {							the_post(); 							global $post;					?>							<tr>								<td class="wpscls-post-content">									<h2 class="wpscls-field-title">										<?php the_title(); ?><br />										<small><?php the_time('d/m/Y'); ?></small>									</h2>																		<div class="wpscls-field-content">										<?php the_content(); ?>									</div>								</td>							</tr>					<?php							}					?></table>