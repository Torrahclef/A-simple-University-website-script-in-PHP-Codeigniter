<div class="wrapper wrapper-breadcrumbs">
	<div class="academia-breadcrumbs">
		<p class="crumbs"><a href="<?php echo site_url() ?>"><?php echo lang('global_home'); ?></a> <span class="separator"> / </span> <span class="current"><?php echo lang('global_news'); ?></span></p>
	</div><!-- end .academia-breadcrumbs -->
</div><!-- .wrapper .wrapper-breadcrumbs -->

<div id="content">
	
	<div class="wrapper wrapper-content-main">
	
		<div class="academia-column academia-column-main academia-column-marginright">

						
			<div class="post-meta-single">
				<h1 class="title title-l title-post-single"><?php echo lang('global_news'); ?></h1>
							</div><!-- end .post-meta -->

			<div class="divider">&nbsp;</div>

			<div class="post-single">
			<div class="cleaner">&nbsp;</div>
				
								
			</div><!-- .post-single -->
			
			
			
			<ul class="academia-posts-archive academia-loop-posts">
 <?php foreach ($items as $item): ?> 
	
	<li class="academia-post academia-loop-post post-266 post type-post status-publish format-standard has-post-thumbnail hentry category-videos">
	
		<div class="post-cover"><a href="<?php echo site_url('blogpost/index/' . $item->blog_id) ?>" title="<?php echo $item->title ?>"><img src="<?php echo $item->image ?>" alt="Photo" class="Thumbnail thumbnail thumb-loop-main " width="160" height="100" /></a></div><!-- .post-cover -->		
		<div class="post-content">
		
			<h2 class="title-ms title-post"><a href="<?php echo site_url('blogpost/index/' . $item->blog_id) ?>" title="<?php echo $item->title ?>"><?php echo $item->title ?></a></h2>
			<p class="post-excerpt"> <?php echo word_limiter($item->description, 10) ?> </p></p>
			<p class="post-meta"><time datetime="2013-12-27" pubdate><?php echo date('M d, Y', strtotime($item->datetime)) ?></time> </p>
		
		</div><!-- .post-content -->
	
	</li><!-- .academia-loop-post -->

     <?php endforeach ?>
	
</ul><!-- .academia-posts-archive .academia-loop-posts -->

<div class="academia-pagination">
	<!--<div class="divider">&nbsp;</div>-->
	<span class='page-numbers current'>1</span>
<a class='page-numbers' href='page/2/index.html'>2</a>
<a class="next page-numbers" href="page/2/index.html">Next &rarr;</a></div><!-- end .academia-pagination -->

			
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .academia-column .academia-column-main .academia-column-marginright -->
		
		<aside class="academia-column academia-column-aside academia-column-last">
		
			
<div class="widget academia-call-to-action" id="academia-widget-call2action-3">
		<div class="academia-call2action academia-call2action-list" style="background-color: #bc3a3a;">
			<span class="call2action-span academia-call2action-main">Apply at University</span>			<span class="call2action-span academia-call2action-secondary">0-800-123456 or <a href="mailto:apply@example.com">apply@example.com</a></span>		</div><!-- .academia-call2action .academia-call2action-list -->

		<div class="cleaner">&nbsp;</div></div><div class="widget recent-events" id="academia-recent-events-3"><p class="title-s title-widget title-widget-grey">Upcoming Events Widget</p><ul class="academia-posts academia-events academia-events-widget">
			<li class="academia-post academia-event">
			
								<div class="post-cover">
					
					<div class="post-cover-wrapper">
					
						<span class="event-date">14</span>
						<span class="event-month">Feb</span>
						
					</div><!-- .post-cover-wrapper -->
					
				</div><!-- .post-cover -->
								
				<div class="post-content">
					<h2 class="title-s title-post"><a href="../event/harum-quidem-rerum-facilis-est-et-expedita/index.html" title="Permalink to Harum quidem rerum facilis est et expedita">Harum quidem rerum facilis est et expedita</a></h2>
					<p class="post-excerpt">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit...</p>				</div><!-- .post-excerpt -->
			
				<div class="cleaner">&nbsp;</div>
				
			</li><!-- .academia-post .academia-event -->

			
			<li class="academia-post academia-event">
			
								<div class="post-cover">
					
					<div class="post-cover-wrapper">
					
						<span class="event-date">08</span>
						<span class="event-month">Mar</span>
						
					</div><!-- .post-cover-wrapper -->
					
				</div><!-- .post-cover -->
								
				<div class="post-content">
					<h2 class="title-s title-post"><a href="../event/quis-autem-vel-eum-iure-reprehenderit/index.html" title="Permalink to Quis autem vel eum iure reprehenderit">Quis autem vel eum iure reprehenderit</a></h2>
					<p class="post-excerpt">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro...</p>				</div><!-- .post-excerpt -->
			
				<div class="cleaner">&nbsp;</div>
				
			</li><!-- .academia-post .academia-event -->

			</ul><!-- end .academia-posts --><div class="cleaner">&nbsp;</div></div>			
			<div class="cleaner">&nbsp;</div>
		
		</aside><!-- .academia-column .academia-column-aside .academia-column-last -->
		
		<div class="cleaner">&nbsp;</div>
	
	</div><!-- .wrapper .wrapper-content-main -->

</div><!-- end #content -->
	
	</div><!-- .wrapper .wrapper-main -->
	
	