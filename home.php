<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */
get_header ();
?>
<div id="home">
<div class="container-fluid ">

	<div class="row">
		<div class="col-sm-10 col-sm-offset-2 ">
			<div id="title">
			<h1>Md Abu Obaida</h1>
			<h2>Software Engineer</h2>
			<h2>Yu Bioinformatics Lab, Texas A&M University</h2>

<a class="btn btn-primary" href="https://www.facebook.com/tareq.obaida" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp
<a class="btn btn-danger" href="https://plus.google.com/u/0/+TareqObaida/posts/p/pub" target="_blank"><i class="fa fa-google-plus "></i></a>&nbsp
<a class="btn btn-info" href="https://www.linkedin.com/in/mdabuobaida" target="_blank"><i class="fa fa-linkedin "></i></a>		
</div>

		</div>
		<!-- close col -->
	</div>
	<!-- close .row -->
</div>
<!-- close .container -->
			</div>
			<!--home ends  -->


<?php  get_footer(); ?>