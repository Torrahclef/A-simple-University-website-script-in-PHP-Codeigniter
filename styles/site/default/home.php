<div id="content">
	
	<div class="wrapper wrapper-content-main">
	
		
<div id="academia-slideshow" class="flexslider">
	
	<ul class="academia-slides">
		
		<?php foreach ($sliders as $item): ?>  		
		<li class="academia-slide">
			
			<div class="post-cover">
				<img src="<?php echo $item->image ?>" alt="<?php echo $item->title ?>" class="Thumbnail thumbnail thumb-academia-slideshow " width="960" height="350" />
			</div><!-- .post-cover -->
			
			<div class="post-content">
				<div class="post-content-wrapper">
					<h2 class="title-l title-post"><?php echo $item->title ?></h2>
					<p class="post-excerpt"><?php echo $item->description ?>...</p>
					</div><!-- .post-content-wrapper -->
			</div><!-- .post-content -->
			
		</li><!-- .slide -->
		 <?php endforeach ?>		
				
	</ul><!-- .academia-slides -->
	
	<div class="cleaner">&nbsp;</div>
	
</div><!-- #academia-slideshow -->

<script type="text/javascript">
jQuery(document).ready(function() {
	
	jQuery("#academia-slideshow").flexslider({
        selector: ".academia-slides > .academia-slide",
		animationLoop: true,
        initDelay: 1000,
		smoothHeight: false,
				slideshow: true,
		slideshowSpeed: 5000,
				pauseOnAction: true,
        controlNav: true,
        directionNav: false,
		useCSS: true,
		touch: false,
        animationSpeed: 500
    });	 

});
</script>

		<div class="widget academia-featured-pages" id="academia-widget-featured-pages-2"><ul class="academia-featured-pages">	
				<li class="academia-featured-page academia-featured-page-1">
				
					<div class="post-cover"><a href="#" title="About Academy"><img src="<?php echo site_url(); ?>/styles/site/default/assets/images/1.jpg" alt="About Academy" class="Thumbnail thumbnail thumb-featured-page " width="300" height="160" /></a></div><!-- .post-cover -->					
					<div class="post-content">
						<div class="post-content-wrapper">
														<h2 class="title-m title-post">
							<a href="#" title="">							
							<?php echo lang('global_about'); ?> 							
							</a>                                         </h2>
                                                    <?php foreach ($this->db
               ->where('aboutus_id=1')
                ->get('aboutus')
                ->result()
                as $item): ?>
                <p><?php $this->load->helper('text') ?>
			<p class="post-excerpt"><?php echo word_limiter($item->short_about, 30) ?> <a href="<?php echo site_url('aboutus') ?>">Continue Reading</a></p>
								</div><!-- .post-content-wrapper -->
					</div><!-- .post-content -->
					
					<div class="cleaner">&nbsp;</div>
				
				</li><!-- .academia-featured-page .academia-featured-page-1 -->
		
					
				<li class="academia-featured-page academia-featured-page-2">
				
                                    <div class="post-cover"><a href="#" title="Courses"><img src="<?php echo site_url(); ?>/styles/site/default/assets/images/3.jpg" alt="Courses" class="Thumbnail thumbnail thumb-featured-page " width="300" height="160" /></a></div><!-- .post-cover -->					
					<div class="post-content">
						<div class="post-content-wrapper">
														<h2 class="title-m title-post">
							<a href="#" title="">							
							<?php echo lang('global_our_courses'); ?>						
							</a>							</h2>
											<p class="post-excerpt"><?php echo word_limiter($item->course, 30) ?></p>
													</div><!-- .post-content-wrapper -->
					</div><!-- .post-content -->
					
					<div class="cleaner">&nbsp;</div>
				
				</li><!-- .academia-featured-page .academia-featured-page-1 -->
		
					
				<li class="academia-featured-page academia-featured-page-3">
				
                                    <div class="post-cover"><a href="#" title="Join Us"><img src="<?php echo site_url(); ?>/styles/site/default/assets/images/9.jpg" alt="Photo Gallery" class="Thumbnail thumbnail thumb-featured-page " width="300" height="160" /></a></div><!-- .post-cover -->					
					<div class="post-content">
						<div class="post-content-wrapper">
														<h2 class="title-m title-post">
							<a href="#" title="">							
							<?php echo lang('global_join_us'); ?> 							
							</a>							</h2>
<p class="post-excerpt"><?php echo word_limiter($item->gallery, 30) ?></p>
													</div><!-- .post-content-wrapper -->
					</div><!-- .post-content -->
					
					<div class="cleaner">&nbsp;</div>
				
				</li><!-- .academia-featured-page .academia-featured-page-1 -->
		
				</ul><!-- .academia-featured-pages --><div class="cleaner">&nbsp;</div></div><div class="widget academia-call-to-action" id="academia-widget-call2action-2">
		<div class="academia-call2action academia-call2action-columns">
			<span class="call2action-span academia-call2action-main"><?php echo lang('global_talk_to_us'); ?> <?php echo config('name'); ?></span>			<span class="call2action-span academia-call2action-secondary"><?php echo config('phone') ?> or <a href="mailto:<?php echo config('webmaster_email') ?>"><?php echo config('webmaster_email') ?></a></span>		</div><!-- .academia-call2action .academia-call2action-columns -->
<?php endforeach;?>  
		<div class="cleaner">&nbsp;</div></div>		
				
		<div class="academia-column academia-column-half academia-column-marginright">
		
			<div class="widget academia-special-posts" id="academia-featured-posts-2"><ul class="academia-featured-posts">
			<li class="academia-featured-post featured-post-video">
			<?php foreach ($this->db
               ->where('aboutus_id=1')
                ->get('aboutus')
                ->result()
                as $item): ?>
				<div class="post-cover"><iframe width="465" height="262" src="http://www.youtube-nocookie.com/embed/<?php echo $item->name; ?>?rel=0" frameborder="0" allowfullscreen></iframe></div><!-- .post-cover -->				

			<?php endforeach; ?>
			</li><!-- .academia-featured-post .featured-post-video -->

			</ul><!-- .academia-featured-posts -->
                        	 <hr>
                                <div class="post-content">
				
					<h2 class="title-l title-post"><a href="#" title=""><?php echo lang('global_vision'); ?></a></h2>
                                        
                                      
					<p class="post-excerpt"><?php echo config('description') ?></p>					
										
										
				</div><!-- .post-content -->
		<div class="cleaner">&nbsp;</div></div>			
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .academia-column .academia-column-half -->
		
		<div class="academia-column academia-column-half academia-column-last">
		
			<div class="widget recent-events" id="academia-recent-events-2"><p class="title-s title-widget title-widget-red"><?php echo lang('global_upcoming_events'); ?></p><ul class="academia-posts academia-events academia-events-widget">
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
                                        <?php echo word_limiter($item->description, 25) ?> </p>				</div><!-- .post-excerpt -->
			
				<div class="cleaner">&nbsp;</div>
				
			</li>
                     <?php endforeach; ?>    
                        
                        <!-- .academia-post .academia-event -->

			</ul><!-- end .academia-posts --><div class="cleaner">&nbsp;</div></div><div class="widget recent-posts" id="academia-recent-posts-2"><p class="title-s title-widget title-widget-grey"><?php echo lang('global_news'); ?></p><ul class="academia-posts academia-posts academia-posts-widget">
			<?php foreach ($this->db
                ->order_by('blog_id' ,'DESC')
                ->get('blog', 2, 'DESC')
                ->result()
                as $item): ?>	
                             
                                <li class="academia-post">
									
				<div class="post-cover"><div class="post-cover-wrapper"><a href="<?php echo site_url('blogpost/index/' . $item->blog_id . '-' . permalink($item->title)) ?>" title="<?php echo ($item->title) ?>"><img src="<?php echo $item->image ?>" alt="<?php echo ($item->title) ?>" class="Thumbnail thumbnail thumb-loop-small " width="100" height="60" /></a></div><!-- .post-cover-wrapper --></div><!-- .post-cover -->		
				<div class="post-content">
					<h2 class="title-xs title-post"><a href="<?php echo site_url('blogpost/index/' . $item->blog_id . '-' . permalink($item->title)) ?>" title=""><?php echo ($item->title) ?></a></h2>
                                        <p class="post-meta"><time datetime="<?php echo date('M d, Y', strtotime($item->datetime)) ?>" pubdate><?php echo date('M d, Y', strtotime($item->datetime)) ?></time>					<span class="category"> / <a href="<?php echo site_url('news'); ?>" rel="category tag"><?php echo lang('global_news'); ?></a></span></p>
														</div><!-- .post-content -->
			
				<div class="cleaner">&nbsp;</div>
										
			</li><!-- .academia-post -->
			<?php endforeach; ?>
			</ul><!-- end .academia-posts --><div class="cleaner">&nbsp;</div></div>			
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .academia-column .academia-column-half -->
		
				
		<div class="cleaner">&nbsp;</div>
	
	</div><!-- .wrapper .wrapper-content-main -->

</div><!-- end #content -->

	</div><!-- .wrapper .wrapper-main -->
	
	