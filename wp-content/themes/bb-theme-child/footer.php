<?php do_action('fl_content_close'); ?>

	
	</div><!-- .fl-page-content -->
	<?php 
		
	do_action('fl_after_content'); 
	
	if ( FLTheme::has_footer() ) :
	
	?>
	<?php echo do_shortcode("[insert page='footer' display='content']"); ?>
	<footer class="fl-page-footer-wrap" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		
		
		<?php 
					
		do_action('fl_footer_wrap_open');
		do_action('fl_before_footer_widgets');
		
		FLTheme::footer_widgets();
		
		do_action('fl_after_footer_widgets');
		do_action('fl_before_footer');
		
		FLTheme::footer();
		
		do_action('fl_after_footer');
		do_action('fl_footer_wrap_close');
		
		?>
	</footer>
	<?php endif; ?>
	<?php do_action('fl_page_close'); ?>
</div><!-- .fl-page -->
<?php 
	
wp_footer(); 

do_action('fl_body_close');

FLTheme::footer_code();

?>
</body>
</html>