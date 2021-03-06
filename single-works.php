<?php get_header(); ?>

<?php
	if ( apply_filters( 'is_lightning_extend_single', false ) ) :
		do_action( 'lightning_extend_single' );
	else :
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
?>

<div class="section page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header_pageTitle">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
if ( lightning_is_page_header_and_breadcrumb() ) {

	/*
	 BreadCrumb
	/*-------------------------------------------*/
	$old_file_name[] = 'module_panList.php';
	if ( locate_template( $old_file_name, false, false ) ) {
		locate_template( $old_file_name, true, false );
	} else {
		get_template_part( 'template-parts/breadcrumb' );
	}
} // if ( lightning_is_page_header_and_top_breadcrumb() ){
?>

<div id="wrapper-area" class="wrap flex-area works-wrapper">
		<div id="content">


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
				<?php do_action( 'lightning_entry_body_before' ); ?>
	
				<div class="<?php lightning_the_class_name( 'entry-body' ); ?>">
					<?php the_content(); ?>
				</div>
	
				<?php do_action( 'lightning_entry_body_after' ); ?>
	

	
		</article>

		<?php
		endwhile;
		endif; // if ( have_posts() ) :
		endif; // if ( apply_filters( 'is_lightning_extend_single', false ) ) :

		?>
		
		
		
		<div id="link-price">
			<p class="toprice-p">気になる制作料金はこちら</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/" class="button flex-area-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-yen.png" alt="" width="35" height="33" class="icon-yen">
				<span>制作料金と流れ</span>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-leaf.png" alt="" width="27" height="17" class="icon-leaf">
			</a>
		</div>
		
		
			<div class="contact-baner wow bounceIn">
				<h3 class="web-font"><span>ホームページ制作・ネットショップ制作<br>ブログカスタマイズなどのお見積りは<br>お気軽にどうぞ！</span></h3>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/" class="tocontact over flex-area-center">
					<span class="button"><span>お問い合わせへ</span></span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clickchomo.png" width="118" height="90" class="clickchomo" alt="">
				</a>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-baner-robo.png" width="110" height="92" class="contact-robo" alt="">
			</div>



		</div><!-- [ /.mainSection ] -->

		<?php get_sidebar('works'); ?>

</div><!-- [ /#wrapper-area ] -->
<?php get_footer(); ?>
