<?php get_header(); ?>

<?php
if ( lightning_is_page_header_and_breadcrumb() ){

	// Dealing with old files.
	// Actually, it's ok to only use get_template_part().
	/*-------------------------------------------*/
	/* Page Header
	/*-------------------------------------------*/
	$old_file_name[] = 'module_pageTit.php';
	if ( locate_template( $old_file_name, false, false ) ) {
		locate_template( $old_file_name, true, false );
	} else {
		get_template_part( 'template-parts/page-header' );
	}
	/*-------------------------------------------*/
	/* BreadCrumb
	/*-------------------------------------------*/
	$old_file_name[] = 'module_panList.php';
	if ( locate_template( $old_file_name, false, false ) ) {
		locate_template( $old_file_name, true, false );
	} else {
		get_template_part( 'template-parts/breadcrumb' );
	}

} // if ( lightning_is_page_header_and_top_breadcrumb() ){
?>

<div id="wrapper-area" class="wrap flex-area">
		<div id="content">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) :
					the_post();
				?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					<?php do_action( 'lightning_entry_body_before' ); ?>
					<div class="<?php lightning_the_class_name( 'entry-body' ); ?>">
						<?php the_content(); ?>
					</div>
				
						<?php
						$args = array(
							'before'      => '<nav class="page-link"><dl><dt>Pages :</dt><dd>',
							'after'       => '</dd></dl></nav>',
							'link_before' => '<span class="page-numbers">',
							'link_after'  => '</span>',
							'echo'        => 1,
						);
						wp_link_pages( $args );
						?>
				</div><!-- [ /#post-<?php the_ID(); ?> ] -->
				
					<?php
					endwhile;
				};
				?>
				<?php do_action( 'lightning_mainSection_append' ); ?>
				
				
			<div class="contact-baner wow bounceIn">
				<h3 class="web-font"><span>ホームページ制作・ネットショップ制作<br>ブログカスタマイズなどのお見積りは<br>お気軽にどうぞ！</span></h3>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/" class="tocontact over flex-area-center">
					<span class="button"><span>お問い合わせへ</span></span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clickchomo.png" width="118" height="90" class="clickchomo" alt="">
				</a>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-baner-robo.png" width="110" height="92" class="contact-robo" alt="">
			</div>
				
		</div><!-- [ /.mainSection ] -->

		<?php get_sidebar(); ?>

</div><!-- [ /#wrapper-area ] -->
<?php get_footer(); ?>
