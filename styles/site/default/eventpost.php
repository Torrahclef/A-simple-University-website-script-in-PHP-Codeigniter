<div class="wrapper wrapper-breadcrumbs">
	<div class="academia-breadcrumbs">
		<p class="crumbs"><a href="<?php echo site_url() ?>"> <?php echo lang('global_home'); ?></a> <span class="separator"> / </span> <span class="current"><?php echo $item->title ?></span></p>
	</div><!-- end .academia-breadcrumbs -->
</div><!-- .wrapper .wrapper-breadcrumbs -->

<div id="content">
	
	<div class="wrapper wrapper-content-main">
	
		<div class="academia-column academia-column-main academia-column-marginright">
 <div class="post-meta-single">
				<h1 class="title title-l title-post-single"><?php echo $item->title ?></h1>
								<p class="post-meta"><span class="meta-date">Posted on <?php echo date('M d, Y h:i:s A', strtotime($item->datetime)) ?></span></p><!-- .meta-date -->
											</div><!-- end .post-meta -->

			<div class="divider">&nbsp;</div>
			<div class="post-single">
                       <span style="background-color: #BD362F; color: #fff; padding: 9px;">     <?php echo lang('global_event_date'); ?>:  </span><span style="background-color: #0066cc; color: #fff; padding: 9px; "><?php echo date('M d, Y', strtotime($item->date)) ?> </span>
				 <p> <?php echo $item->description ?></p>
				
				<div class="cleaner">&nbsp;</div>
				
												
			</div><!-- .post-single -->		
				<div class="divider divider-notop">&nbsp;</div>
	
				<div class="academia-post-share">
                                    

	<p class="title-s">Share This</p>

	<span class="academia-share-button">
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
	</span>
	<span class="academia-share-button">
		<a href="http://twitter.com/share" data-url="http://demo.academiathemes.com/lectura/event/sed-ut-perspiciatis-unde-omnis-iste/" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="../../../../platform.twitter.com/widgets.js"></script>
	</span>
	
	<div class="cleaner">&nbsp;</div>

</div><!-- end .academia-post-share -->			
			
						
			<div class="divider divider-notop">&nbsp;</div>
			
			

						
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .academia-column .academia-column-main .academia-column-marginright -->
		
		
	

