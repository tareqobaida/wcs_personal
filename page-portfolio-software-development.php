<?php get_header();?>
<h3 class="bg-primary text-center addPadding">Desktop Software Development</h3>
<div class="container">
	<div class='row'>
		<div class="col-sm-6">
			<div class="portfolio">
				<h4 class="bg-success addPadding">Java software for Telecom industry</h4>
				<p>In radio network optimization department engineers need to
					collect raw data, analyze and prepare report. By this software
					people can import raw data and report will be calculated and
					prepared automatically. This can be done both in graphical
					presentation or tabular presentation.</p>
				<img class="img-responsive img-thumbnail"
					src="<?php echo get_template_directory_uri().'/includes/resources/img/javasoft.png' ?>">
			</div>
			<div class="portfolio">
				<h4 class="bg-success addPadding">Interactive Sensitive Data Exposure Detection through Static Analysis</h4>
				<p>
				Secure Sensitive Data (SSD) is an Eclipse IDE plugin that provides interactive security suggestions
				 to java developers in real-time through static analysis. Interactive support involves the developer 
				 in security based decision making early on in design
				<a
						href="<?php echo get_template_directory_uri().'/includes/resources/CSCE665_project-report.pdf' ?>">
						Detailed report</a> <br> <a
						href="https://github.com/tareqobaida/SSD"> GitHub link</a>

				</p>
				<img class="img-responsive img-thumbnail"
					src="<?php echo get_template_directory_uri().'/includes/resources/img/ssd1.png' ?>">
			</div>			
		</div>
		<div class="col-sm-6">
			<div class="portfolio">
				<h4 class="bg-success addPadding">Interactive Data Race Checker:
					IDRC</h4>
				<p>
					An Eclipse plugin which can detect potential data race in Java
					source code. The plugin will is interactive in nature meaning it
					runs in background and alert user with marker and information for
					any possible data race while the user writing his code in Eclipse
					editor.<a
						href="<?php echo get_template_directory_uri().'/includes/resources/report_CSCE689_IDRC_Obaida.pdf' ?>">
						Detailed report</a> <br> <a
						href="https://github.com/tareqobaida/IDRC"> GitHub link</a>

				</p>
				<img class="img-responsive img-thumbnail"
					src="<?php echo get_template_directory_uri().'/includes/resources/img/IDRC_graph.png' ?>">
			</div>
			<div class="portfolio">
				<h4 class="bg-success addPadding">Microsoft Excel, VB application</h4>
				<p>
					This macro generates carrier file for the software <a
						hrer="http://mcom.software.informer.com/">MCOM</a> from the
					CDD_dump file collected from Ericsson BSC (Base Station
					Controller). Carrier file is an integral part of MCOM for frequency
					planning and optimization.

				</p>
				<img class="img-responsive img-thumbnail"
					src="<?php echo get_template_directory_uri().'/includes/resources/img/mcomcarrier.PNG' ?>">
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>