

<div class="wrapper wrapper-breadcrumbs">
	<div class="academia-breadcrumbs">
		<p class="crumbs"><a href="<?php echo site_url() ?>"><?php echo lang('global_home'); ?></a> <span class="separator"> / </span> <span class="current"><?php echo $item->title ?></span></p>
	</div><!-- end .academia-breadcrumbs -->
</div><!-- .wrapper .wrapper-breadcrumbs -->

<div id="content">
	
	<div class="wrapper wrapper-content-main">
	
		<div class="academia-column academia-column-main academia-column-marginright">
 <div class="post-meta-single">
				<h1 class="title title-l title-post-single"><?php echo $item->title ?></h1>
								<p class="post-meta"><span class="meta-date"><?php echo lang('global_posted_on'); ?> <?php echo date('M d, Y h:i:s A', strtotime($item->datetime)) ?></span></p><!-- .meta-date -->
											</div><!-- end .post-meta -->

			<div class="divider">&nbsp;</div>
			<div class="post-single">
                      <span style="background-color:#1daf92; color: #fff; padding: 9px;">   <?php echo lang('global_professor'); ?>: <?php echo $item->lecturar ?> </span> <span style="background-color: #BD362F; color: #fff; padding: 9px;">    <?php echo lang('global_course_code'); ?>: <?php echo $item->code ?> </span><span style="background-color: #0066cc; color: #fff; padding: 9px; "><?php echo lang('global_course_duration'); ?>: <?php echo $item->duration ?> </span>
				 <p> <?php echo $item->description ?></p>
				
				<div class="cleaner">&nbsp;</div>
				
												
			</div><!-- .post-single -->		
	
				<div class="academia-post-share">
                                    


	<div class="cleaner">&nbsp;</div>

</div><!-- end .academia-post-share -->			
			
						
			
			

						
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .academia-column .academia-column-main .academia-column-marginright -->
		
		
	

