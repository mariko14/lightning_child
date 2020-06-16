<?php get_header(); ?>


<div class="section page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header_pageTitle">
					<h1 class="entry-title"><span>制作実績</span></h1>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
// Dealing with old files.
// Actually, it's ok to only use get_template_part().
/*
 BreadCrumb
/*-------------------------------------------*/
$old_file_name[] = 'module_panList.php';
if ( locate_template( $old_file_name, false, false ) ) {
	locate_template( $old_file_name, true, false );
} else {
	get_template_part( 'template-parts/breadcrumb' );
}
?>


<div id="wrapper-area" class="wrap flex-area">
		<div id="content">
			<p style="padding-bottom:40px;" class="text-center">ここに掲載している以外の実績もございます。詳しくはメールフォームよりお問い合わせください</p>

	<?php
	/*
	  Archive title
	/*-------------------------------------------*/
	$archiveTitle_html = '';
	$page_for_posts    = lightning_get_page_for_posts();
	// Use post top page（ Archive title wrap to div ）.
	if ( $page_for_posts['post_top_use'] || get_post_type() !== 'post' ) {
		if ( is_year() || is_month() || is_day() || is_tag() || is_author() || is_tax() || is_category() ) {
			$archiveTitle      = get_the_archive_title();
			$archiveTitle_html = '<header class="archive-header"><h1>' . $archiveTitle . '</h1></header>';
		}
	}
	echo wp_kses_post( apply_filters( 'lightning_mainSection_archiveTitle', $archiveTitle_html ) );

	/*
	  Archive description
	/*-------------------------------------------*/
	$archiveDescription_html = '';
	if ( is_category() || is_tax() || is_tag() ) {
		$archiveDescription = term_description();
		$page_number        = get_query_var( 'paged', 0 );
		if ( ! empty( $archiveDescription ) && $page_number == 0 ) {
			$archiveDescription_html = '<div class="archive-meta">' . $archiveDescription . '</div>';
		}
	}
	echo wp_kses_post( apply_filters( 'lightning_mainSection_archiveDescription', $archiveDescription_html ) );

	$postType = lightning_get_post_type();

	do_action( 'lightning_loop_before' );
	?>

<div class="<?php lightning_the_class_name( 'postList' ); ?>">
	
<?php if (have_posts()) :?>
	<?php while (have_posts()) : the_post(); ?>
	 <div class="work-box wow fadeIn">
          <?php the_content(); ?>
           <div class="work-more">
               <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="button">詳しく見る</a>
           </div>
        </div>  
       <hr class="clear">

    
	<?php endwhile; endif; ?>

	<?php
	the_posts_pagination(
		array(
			'mid_size'           => 1,
			'prev_text'          => '&laquo;',
			'next_text'          => '&raquo;',
			'type'               => 'list',
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'lightning' ) . ' </span>',
		)
	);
	?>

	

</div><!-- [ /.postList ] -->

<?php do_action( 'lightning_loop_after' ); ?>
<?php do_action( 'lightning_mainSection_append' ); ?>
		</div><!-- [ /.mainSection ] -->

		<?php get_sidebar('works'); ?>

</div><!-- [ /#wrapper-area ] -->
<?php get_footer(); ?>
