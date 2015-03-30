<div id="page" class="page_wrap">
	<div id="page-width" class="page-width">
		
		<!-- Header Region -->
		<div id="header" class="header_wrap clearfix">
			<?php if ($logo): ?>
				<div class="logo">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
						<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
					</a>
				</div>
			<?php endif; ?>		
			<?php print render($page['header']); ?>
		</div>
		
		<!-- Banner Region -->
		<?php if ($page['banner']): ?>
			<div id="banner" class="column banner">
				<div class="section">
					<?php print render($page['banner']); ?>
				</div>
			</div> <!-- /.section, /#banner -->
		<?php endif; ?>
	
		<div id="main" class="main clearfix">
			
			<!-- Sidebar Left Region -->
			<?php if ($page['sidebar_left']): ?>
				<div id="sidebar-left" class="column sidebar_wrap">
					<div class="section">
						<?php print render($page['sidebar_left']); ?>
					</div>
				</div>
			<?php endif; ?>
			
			<!-- Content Region -->
			<div id="content" class="content_wrap">
				<?php if ($title): ?>
					<h1 class="title" id="page-title">
					  <?php print $title; ?>
					</h1>
				<?php endif; ?>
				<?php print render($title_suffix); ?>
				
				<?php if ($tabs): ?>
					<div class="tabs">
					  <?php print render($tabs); ?>
					</div>
				<?php endif; ?>
				
				<?php print render($page['content']); ?>			
			</div>
		</div>
		
		<!-- Callout Region -->
		<?php if ($page['callout']): ?>
			<div id="callout" class="callout clearfix">
				<?php print render($page['callout']); ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<!-- Footer Region -->
<?php if ($page['footer']): ?>
	<div id="footer" class="footer_wrap clearfix">
		<div class="page-width">
			<?php print render($page['footer']); ?>
		</div>
	</div> 
<?php endif; ?>