
<div class="wrapper wrapper-breadcrumbs">
	<div class="academia-breadcrumbs">
		<p class="crumbs"><a href="<?php echo site_url() ?>"><?php echo lang('global_home'); ?></a> <span class="separator"> / </span><?php echo lang('global_about'); ?><span class="separator"> </p>
	</div><!-- end .academia-breadcrumbs -->
</div><!-- .wrapper .wrapper-breadcrumbs -->

<div id="content">
	
	<div class="wrapper wrapper-content-main">
	
		<div class="academia-column academia-column-main academia-column-marginright">

						
			<div class="post-meta-single">
				<h1 class="title title-l title-post-single"><?php echo lang('global_about'); ?></h1>
							</div><!-- end .post-meta -->

			<div class="divider">&nbsp;</div>

			<div class="post-single">
			<?php foreach ($items as $item): ?> 
				<p><?php echo $item->about ?></p>
				<?php endforeach; ?>
				<div class="cleaner">&nbsp;</div>
				
								
			</div><!-- .post-single -->
			
			
						
			
				<div class="divider divider-notop">&nbsp;</div>
			
			
						
						
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .academia-column .academia-column-main .academia-column-marginright -->
		<aside class="academia-column academia-column-aside academia-column-last">
		
			
<div class="widget academia-call-to-action" id="academia-widget-call2action-3">
		<div class="academia-call2action academia-call2action-list" style="background-color: #bc3a3a;">
			<span class="call2action-span academia-call2action-main"><?php echo lang('global_apply_at'); ?> University</span>			<span class="call2action-span academia-call2action-secondary">0-800-123456 or <a href="mailto:apply@example.com">apply@example.com</a></span>		</div><!-- .academia-call2action .academia-call2action-list -->

			 
                        <!-- .academia-post .academia-event -->

			<!-- end .academia-posts --><div class="cleaner">&nbsp;</div></div><div class="widget recent-posts" id="academia-recent-posts-2"><p class="title-s title-widget title-widget-grey">Recent News &amp; Announcements</p><ul class="academia-posts academia-posts academia-posts-widget">
			<?php foreach ($this->db
                ->order_by('blog_id' ,'DESC')
                ->get('blog', 2, 'DESC')
                ->result()
                as $item): ?>	
                             
                                <li class="academia-post">
									
				<div class="post-cover"><div class="post-cover-wrapper"><a href="<?php echo site_url('blogpost/index/' . $item->blog_id . '-' . permalink($item->title)) ?>" title="At vero eos et accusamus et iusto odio dignissimos"><img src="<?php echo $item->image ?>" alt="At vero eos et accusamus et iusto odio dignissimos" class="Thumbnail thumbnail thumb-loop-small " width="100" height="60" /></a></div><!-- .post-cover-wrapper --></div><!-- .post-cover -->		
				<div class="post-content">
					<h2 class="title-xs title-post"><a href="<?php echo site_url('blogpost/index/' . $item->blog_id . '-' . permalink($item->title)) ?>" title=""><?php echo ($item->title) ?></a></h2>
										<p class="post-meta"><time datetime="<?php echo date('M d, Y', strtotime($item->datetime)) ?>" pubdate><?php echo date('M d, Y', strtotime($item->datetime)) ?></time>					<span class="category"> / <a href="category/news-announcements/index.html" rel="category tag">News &amp; Announcements</a></span></p>
														</div><!-- .post-content -->
			
				<div class="cleaner">&nbsp;</div>
										
			</li><!-- .academia-post -->
			<?php endforeach; ?>
                        </ul>
                     <div class="widget recent-events" id="academia-recent-events-2"><p class="title-s title-widget title-widget-red">Upcoming Events</p><ul class="academia-posts academia-events academia-events-widget">
			 
                              
                            <?php foreach ($this->db
                ->order_by('event_id' ,'DESC')
                ->get('events', 2, 'DESC')
                ->result()
                as $item): ?>	
                             
                                <li class="academia-post academia-event">
			
								<div class="post-cover">
					
					<div class="post-cover-wrapper">
					
						<span class="event-date"><?php echo date('d', strtotime($item->date)) ?></span>
						<span class="event-month"><?php echo date('M', strtotime($item->date)) ?></span>
						
					</div><!-- .post-cover-wrapper -->
					
				</div><!-- .post-cover -->
								
				<div class="post-content">
					<h2 class="title-s title-post"><a href="<?php echo site_url('eventpost/index/' . $item->event_id . '-' . permalink($item->title)) ?>" title=""><?php echo ($item->title) ?></a></h2>
					<p class="post-excerpt"> <?php $this->load->helper('text') ?>
                                        <?php echo word_limiter($item->description, 10) ?> </p>				</div><!-- .post-excerpt -->
			
				<div class="cleaner">&nbsp;</div>
				
			</li>
                     <?php endforeach; ?>   
                            </ul>
                            <!-- end .academia-posts --><div class="cleaner">&nbsp;</div></div>			
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .academia-column .academia-column-half -->
                        
                        <div class="cleaner">&nbsp;</div>
		
		</aside><!-- .academia-column .academia-column-aside .academia-column-last -->
		
		<div class="cleaner">&nbsp;</div>
	
	</div><!-- .wrapper .wrapper-content-main -->

</div><!-- end #content -->
	
</div>
</div><!-- .wrapper .wrapper-main -->
	
		