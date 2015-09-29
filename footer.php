<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */
?>
</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->

<footer id="footer" class="white-bg" role="contentinfo">
	<div class="container-fluid">
            <div>
		<div class="row">
			<div class="col-sm-12">
				<div class="site-info">
					<p style="text-align: center; margin: 10px;">All Content &copy 2015, Md Abu Obaida, All Rights Reserved &nbsp
										<?php if(!is_home()){?>
<a class="btn btn-primary" href="https://www.facebook.com/tareq.obaida" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp
<a class="btn btn-danger" href="https://plus.google.com/u/0/+TareqObaida/posts/p/pub" target="_blank"><i class="fa fa-google-plus "></i></a>&nbsp
<a class="btn btn-info" href="https://www.linkedin.com/in/mdabuobaida" target="_blank"><i class="fa fa-linkedin "></i></a>
<?php } ?>
					</p>

<!-- 					<p class="text-center">Powered by <a href="https://wordpress.com/">WordPress and <a></a href="http://getbootstrap.com/">Bootstrap</a></p> -->
                                        
				</div><!-- close .site-info -->
			
			</div>	
		</div>
                </div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>
</div><!-- close .main-content -->
</body>
</html>