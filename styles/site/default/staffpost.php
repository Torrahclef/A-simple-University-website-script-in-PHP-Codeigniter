
<div class="wrapper wrapper-breadcrumbs">
	<div class="academia-breadcrumbs">
            <p class="crumbs"><a href="<?php echo site_url() ?>"><?php echo lang('global_home'); ?></a> <span class="separator"> / </span> <span class="current"><?php echo $item->name;?></span></p>
	</div><!-- end .academia-breadcrumbs -->
</div><!-- .wrapper .wrapper-breadcrumbs -->

<div id="content">
	
	<div class="wrapper wrapper-content-main">
	
		<div class="academia-column academia-column-main academia-column-marginright">

						
			<div class="post-meta-single">
				<h1 class="title title-l title-post-single"><?php echo $item->name;?></h1>
							</div><!-- end .post-meta -->

			<div class="divider">&nbsp;</div>

			<div class="post-single">
                            <div class="widget recent-events">
                            <div class="post-cover"><img src="<?php echo $item->image ?>" alt="Photo" class="Thumbnail thumbnail thumb-loop-main " width="auto" height="65px" /></div><!-- .post-cover -->		
		
                            </div>
                            <p><?php echo $item->description;?></p>
				
				<div class="cleaner">&nbsp;</div>
				
								
			</div><!-- .post-single -->
			
			
			
<div class="widget">
	<p class="title-s title-widget title-widget-gold title-nomarginbot"><?php echo lang('global_contact_staff'); ?></p>
	
	<ul class="tax-meta-list">
				<li class="tax-meta-item">
			<span class="tax-label"><?php echo lang('global_position'); ?>:</span>
			<span class="tax-value"><?php echo $item->position;?></span> 
		</li><!-- .tax-meta-item -->
								<li class="tax-meta-item">
			<span class="tax-label"><?php echo lang('global_department'); ?>:</span>
			<span class="tax-value"><?php echo $item->department;?></span> 
		</li><!-- .tax-meta-item -->
						<li class="tax-meta-item">
			<span class="tax-label"><?php echo lang('global_staff_phone'); ?>:</span>
			<span class="tax-value"><?php echo $item->phone;?></span> 
		</li><!-- .tax-meta-item -->
					</ul><!-- .course-meta-list -->
	
</div><!-- .widget-->
						
				<div class="divider divider-notop">&nbsp;</div>
	
				<div class="academia-post-share">

	<p class="title-s">Share This</p>

	<span class="academia-share-button">
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
	</span>
	<span class="academia-share-button">
		<a href="http://twitter.com/share" data-url="http://demo.academiathemes.com/lectura/staff/william-shakespeare/" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="../../../../platform.twitter.com/widgets.js"></script>
	</span>
	
	<div class="cleaner">&nbsp;</div>

</div><!-- end .academia-post-share -->			
						
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .academia-column .academia-column-main .academia-column-marginright -->
		
		<aside class="academia-column academia-column-aside academia-column-last">
		
			
<div class="widget academia-call-to-action" id="academia-widget-call2action-3">
		<div class="academia-call2action academia-call2action-list" style="background-color: #bc3a3a;">
				<span class="call2action-span academia-call2action-main"><?php echo lang('global_apply_at'); ?> <?php echo config('name'); ?></span>			
                        <span class="call2action-span academia-call2action-secondary"><?php echo config('phone'); ?> <a href="mailto:<?php echo config('webmaster_email'); ?>"><?php echo config('webmaster_email'); ?></a></span>		</div><!-- .academia-call2action .academia-call2action-list -->

			 <?php echo ads(1) ?>

			<!-- end .academia-posts --><div class="cleaner">&nbsp;</div></div><div class="widget recent-posts" id="academia-recent-posts-2"><p class="title-s title-widget title-widget-grey"><?php echo lang('global_news'); ?></p><ul class="academia-posts academia-posts academia-posts-widget">
			<?php foreach ($this->db
                ->order_by('blog_id' ,'DESC')
                ->get('blog', 2, 'DESC')
                ->result()
                as $item): ?>	
                             
                                <li class="academia-post">
									
				<div class="post-cover"><div class="post-cover-wrapper"><a href="<?php echo site_url('blogpost/index/' . $item->blog_id . '-' . permalink($item->title)) ?>" title="<?php echo ($item->title) ?>"><img src="<?php echo $item->image ?>" alt="<?php echo ($item->title) ?>" class="Thumbnail thumbnail thumb-loop-small " width="100" height="60" /></a></div><!-- .post-cover-wrapper --></div><!-- .post-cover -->		
				<div class="post-content">
					<h2 class="title-xs title-post"><a href="<?php echo site_url('blogpost/index/' . $item->blog_id . '-' . permalink($item->title)) ?>" title=""><?php echo ($item->title) ?></a></h2>
										<p class="post-meta"><time datetime="<?php echo date('M d, Y', strtotime($item->datetime)) ?>" pubdate><?php echo date('M d, Y', strtotime($item->datetime)) ?></time>					<span class="category"> / <a href="<?php echo site_url('news') ?>" rel="category tag"><?php echo lang('global_news'); ?></a></span></p>
														</div><!-- .post-content -->
			
				<div class="cleaner">&nbsp;</div>
										
			</li><!-- .academia-post -->
			<?php endforeach; ?>
                        </ul>
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
	
