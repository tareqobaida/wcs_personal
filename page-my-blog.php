<?php get_header();?>
<div class='blog-header'>
	<div class='container'>
		<div class='row'>
			<div class="col-sm-12 ">
			<h1 class="text-center">This is my personal blog</h1>
			<h3 class="text-center">I love writing about technology, programming <br/>
			Sometimes try to write short stories about life.
			</h3>
			</div>
		</div>
	</div>
	</div>
	<div class='container-fluid'>
		<div class='row'>
					<div class="col-sm-3 greybackground sidebar" >
	<?php get_sidebar('sidebar-right'); ?>
			</div>
			<div class="col-sm-9 blog" style="padding-left: 50px;" >
		<?php
		$args = array (
				'post_type' => 'post',
				'category_name' => 'Blog',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 10,
		);
		// The Query
		$the_query = new WP_Query ( $args );
		// The Loop
		if ($the_query->have_posts ()) {
			while ( $the_query->have_posts () ) {
				$the_query->the_post ();
				echo '<div class="post">';
				echo '<div class="posttitle">';
				echo '<h2><a href="'. get_permalink($post->ID) . '">'.get_the_title ().'</a></h2>';
				echo '<small><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> &nbsp'
						.get_the_time( 'F jS, Y' ).
						 '</small>&nbsp&nbsp';
				echo '<small>'
						.the_tags('<span class="glyphicon glyphicon-tags" aria-hidden="true"></span> &nbsp',' , ','&nbsp&nbsp').
						'</small>';
				echo '<hr></div>';
				echo '<p>'.get_the_excerpt ().'</p>';
				echo '</div>';
			}
		} else {
			// no posts found
		}
		
		/* Restore original Post Data */
		wp_reset_postdata ();
		?>
		</div>

		</div>
	</div>

	<div class="space"></div>
<?php get_footer();?>