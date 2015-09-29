<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>
	<div class='container-fluid'>
		<div class='row'>
					<div class="col-sm-3 greybackground sidebar">
	<?php get_sidebar('sidebar-right'); ?>
			</div>
			<div class="col-sm-9 blog" >
	<?php while ( have_posts() ) : the_post(); 

echo '<div class="post">';
				echo '<div class="posttitle">';
				echo '<h2>'.get_the_title ().'</h2>';
				echo '<small><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> &nbsp'
						.get_the_time( 'F jS, Y' ).
						 '</small>&nbsp&nbsp';
				echo '<small>'
						.the_tags('<span class="glyphicon glyphicon-tags" aria-hidden="true"></span> &nbsp',' , ','&nbsp&nbsp').
						'</small>';
				echo '<hr></div>';
				 if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : 
				 $attr=array(
				 		'class'=>'img-rounded img-responsive pull-left'
				 );
							the_post_thumbnail('medium',$attr); 
						 endif;
				echo '<p>'.the_content ().'</p><hr/>';
				comments_template(); //load comments.php
				echo '</div>';

	 endwhile; // end of the loop. ?>

		</div>
		</div>
	</div>

	<div class="space"></div>
<?php get_footer();?>