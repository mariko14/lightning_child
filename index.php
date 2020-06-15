<?php get_header(); ?>

<?php
// Dealing with old files.
// Actually, it's ok to only use get_template_part().
/*
 Page Header
/*-------------------------------------------*/
$old_file_name[] = 'module_pageTit.php';
if ( locate_template( $old_file_name, false, false ) ) {
	locate_template( $old_file_name, true, false );
} else {
	get_template_part( 'template-parts/page-header' );
}
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
	<div class="post blog-box">
			<div class="title_space">
	           <h2 class="title"><span><?php the_title(); ?></span></h2>
	            <p class="date"><?php the_time('Y.m.d')?> カテゴリ：<?php $cat = get_the_category(); ?><?php $cat = $cat[0]; ?><?php echo get_cat_name($cat->term_id); ?></p>
	        </div>
	        <div class="blog-box-inner">
	            <div class="over thumb" >
		            <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
	            </div>
	            <div class="text">
	            	<?php the_excerpt(); ?>
	            </div><!-- /text -->
	        </div><!-- /post-inner -->
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"></a>
	    </div>
    
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

		<?php get_sidebar('blog'); ?>

</div><!-- [ /#wrapper-area ] -->
<?php get_footer(); ?>
