<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div id="page">

	<!---------- Top Menu --------->
	<div id="topbar" class="topbar">
		<div class="container container-medium">
			<?php if (!empty($page['top_menu'])): ?>
				<?php print render($page['top_menu']); ?>
			<?php endif; ?>
		</div>
	</div>
	<!-------- /. Top Menu ------->
	
	<!-------- Bottom Menu -------->
	<div class="sticky-wrapper">
		<div class="bottom-menu">
			
			<!-------- Sticky -------->
			<?php if (!empty($page['sticky'])): ?>
				<div class="sticky" id="sticky">
					<div class="container">
						<div class="navbar-sticky">
							<?php print render($page['sticky']); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
				<!-------- /. Sticky -------->
			
			<div class="container-medium">
				
				<?php if ($logo): ?>
					<div class="navbar-brand-logo">
					 	<a class="logo scroll" href="/" title="<?php print t('Home'); ?>">
					  	<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
					  </a>
					</div>
				 <?php endif; ?>
				 
				 
				 <!-- btn-navbar -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				 	<span class="sr-only">Toggle navigation</span>
				 	<span class="icon-bar"></span>
				 	<span class="icon-bar"></span>
				 	<span class="icon-bar"></span>
				 </button>		
				 <!-- ./btn-navbar -->
			  		
					
					<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
						<div class="collapse navbar-collapse">
							<nav role="navigation">
								<?php if (!empty($primary_nav)): ?>
									<?php print render($primary_nav); ?>
								<?php endif; ?>
							</nav>
						</div>
					<?php endif; ?>
					
					
				 <!-- call us in nav -->
				 <div class="call-us-nav">
					 <div class="call-us-wrapper">
							<a href="tel:+15208866419">
								<div class="call-header">Call Us Today</div>
								<div class="phone-number">
									<span class="glyphicon glyphicon-earphone menu-phone-icon"></span>
									<span>(520) 886-6419</span>
								</div>
							</a>
					 </div>
					</div>
					<!-- ./call us in nav -->
				 
				</div>
			</div>
		</div>
		<!------- /. Bottom Menu ------>
	
		<!-------- Content top -------->
	<div id="page-top">
		<?php if (!empty($page['top'])): ?>
			<div class="page-top-fullwidth">
				<?php print render($page['top']); ?>
			</div>
		<?php endif; ?>
	</div>
	<!------ /. Content top ------>
	
	<?php if (!empty($page['cont_head_featured'])): ?>
		<div class="content-head-featured">
			<?php print render($page['cont_head_featured']); ?>
		</div> 
	<?php endif; ?>
	
	<?php if (!empty($page['cont_above_full'])): ?>
		<div class="content-above-fullwidth">
			<?php print render($page['cont_above_full']); ?>
		</div> 
	<?php endif; ?>
	
	
	<div class="main-container container">
		
		<div class="row">
	
			<?php if (!empty($page['sidebar_first'])): ?>
				<aside class="col-sm-3" role="complementary">
					<?php print render($page['sidebar_first']); ?>
				</aside>  <!-- /#sidebar-first -->
			<?php endif; ?>
			
			<div<?php print $content_column_class; ?>>
				<?php if (!empty($page['highlighted'])): ?>
					<div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
				<?php endif; ?>
				<a id="main-content"></a>
				<?php print render($title_prefix); ?>
				<?php if (!empty($title)): ?>
					<h1 class="page-header"><?php print $title; ?></h1>
				<?php endif; ?>
				<?php print render($title_suffix); ?>
				<?php if (!empty($tabs)): ?>
					<?php print render($tabs); ?>
				<?php endif; ?>
				<div class="messages">
					<?php print $messages; ?>
				</div>
				<?php if (!empty($page['help'])): ?>
					<?php print render($page['help']); ?>
				<?php endif; ?>
				<?php if (!empty($action_links)): ?>
					<ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>
				<?php print render($page['content']); ?>
			</div>
			
			<?php if (!empty($page['sidebar_second'])): ?>
				<aside class="col-sm-3" role="complementary">
					<?php print render($page['sidebar_second']); ?>
				</aside>  <!-- /#sidebar-second -->
			<?php endif; ?>
		
		</div>
	</div>
	
	<?php if (!empty($page['cont_below_full'])): ?>
		<div class="content-below-fullwidth">
			<?php print render($page['cont_below_full']); ?>
		</div>  <!-- /#sidebar-first -->
	<?php endif; ?>
	
	<footer class="text-center" id="footer-main">
		<div class="footer-above">
			<div class="container">
				<?php print render($page['footer']); ?>
			</div>
		</div>
		<div class="footer-below">
			<div class="container">
				<?php print render($page['copyright']); ?>
			</div>
		</div>
	</footer>
</div>