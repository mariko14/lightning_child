<aside id="sidebar">

<div class="side-list">
	<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-blog.png" width="265" height="74" alt="ブログカテゴリー" /></h3>
	<ul class="wow fadeIn">
	<?php $cat_info = get_categories('child_of=2');
	    foreach ($cat_info as $category) { if($category->count != 0) : ?>
	    <li><a href="/category/blog/<?php echo $category->category_nicename; ?>/"><span><?php echo $category->cat_name; ?></span></a></li>
	<?php endif; };?>
	</ul>
</div>
<div class="side-list">
	<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-article.png" width="265" height="74" alt="ブログ　最新記事" /></h3>
	<ul class="wow fadeIn">
	<?php $date = query_posts('showposts=5');
	foreach($date as $post):?>
	<li><a href="<?php echo get_permalink($id->ID); ?>" ><span><?php echo $post->post_title; ?></span></a></li>
	<?php endforeach; ?>
	</ul>

</div>

<div class="side-list side-viewed">
	<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-post.png" width="265" height="74" alt="ブログ　人気の記事" /></h3>
	<div class="widget">
	<ul class="wow fadeIn">
			<li class="ranking-3">
	            <a href="https://sourire-web-studio.com/blog/freelance/いきなりwebデザイナー、しかもフリーランスって/">
	                <div class="cms-nav-img">
	                    <img src="/wp-content/uploads/2013/06/ae46b1f460ee46f789c27b264a6cb421.png" width="500" height="375" alt="いきなりWEBデザイナー、しかもフリーランスって無茶苦茶ですよね？" class="object-fit-img">
	                </div>
	                <div class="cms-nav-txt">
	                    <div class="cms-nav-tit">いきなりWEBデザイナー、しかもフリーランスって無茶苦茶ですよね？</div>
	                    <div class="cms-nav-date">2013/06/25</div>
	                </div>
	            </a>
	        </li>
					        <li class="ranking-1">
	            <a href="https://sourire-web-studio.com/blog/shifter/">
	                <div class="cms-nav-img">
	                    <img src="/wp-content/uploads/2019/07/20190726_1.jpg" width="500" height="335" alt="WordPressからShifterにお引っ越しした話" class="object-fit-img">
	                </div>
	                <div class="cms-nav-txt">
	                    <div class="cms-nav-tit">WordPressからShifterにお引っ越しした話</div>
	                    <div class="cms-nav-date">2019/07/26</div>
	                </div>
	            </a>
	        </li>
			        <li class="ranking-4">
	            <a href="https://sourire-web-studio.com/blog/design/new-business_card/">
	                <div class="cms-nav-img">
	                    <img src="/wp-content/uploads/2019/06/c5b9b2874e4db432d3fc5199cd8f89dc-200x150.jpg" width="500" height="327" alt="WEBデザイナー8年生を機に、NEW名刺を作りました" class="object-fit-img">
	                </div>
	                <div class="cms-nav-txt">
	                    <div class="cms-nav-tit">WEBデザイナー8年生を機に、NEW名刺を作りました</div>
	                    <div class="cms-nav-date">2019/06/21 </div>
	                </div>
	            </a>
		</ul>
	</div>
</div>
	
	
	<div id="nokke-area">
		<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nokke-ribon-side.png" width="300" height="60" alt="動画のっけ-ビジネス営業ツール・プレゼンPR動画・研修教材などホワイトボードアニメーション動画制作サービス" /></h3>
		<h4><span class="text">アニメーション動画<br class="br1140">制作サービス</span></h4>
		<p class="nokke-sub">動画のっけはビジネス営業ツール・プレゼンPR動画・研修教材などに利用できるホワイトボードアニメーション動画制作サービスです</p>
		<div id="side-movie-area" class="movie-area wow fadeIn">
			<div class="movide-area-inner">
				<video autoplay muted playsinline src="<?php echo get_stylesheet_directory_uri(); ?>/movie/main-movie.mp4"></video>
			</div>
		</div>
		<a href="https://douga-nokke.com/" class="button"><span>動画のっけ特設サイトへ</span></a>
	</div>
	
	
	<div id="side-banner-area">
		<a class="over banner wow fadeIn" href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-template.png" alt="大人気の素早く手軽な格安ホームページ制作テンプレートプラン" width="300" height="180">
		</a>
		<a class="over banner wow fadeIn" href="<?php echo esc_url( home_url( '/' ) ); ?>/category/blog/">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-blog.png" alt="女性デザイナーと子どもの生活ブログへ" width="300" height="180">
		</a>
	    <a class="over banner wow fadeIn" href="<?php echo esc_url( home_url( '/' ) ); ?>/category/pretty/">
		    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-pretty.png" alt="女性デザイナーがギュッと集めたかわいいものあつめブログ" width="300" height="180">
		</a>
		<a class="over banner wow fadeIn" href="https://chomo-photoisland.com/">
		   <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-chomophoto.png" alt="ハリネズミアルバムサイトへ" width="300" height="180">
		</a>
	</div>
  
	 <section id="text-2" class="widget widget_text">
		 <h3><span>業務内容</span></h3>
		 <div class="textwidget">
			 <h2>ホームページ制作に関わる<br>業務全般</h2>
			 <p>Webサイト デザイン／制作／企画／運営/スマホ対応／ネットショップ制作／バナー 制作など<br>その他、ご相談ください！</p>
		</div>
	</section>
	<section id="text-3" class="widget widget_text">
		<h3><span>対応地域</span></h3>
		<div class="textwidget">
			<p>明石市・神戸市・西宮市・尼崎市、芦屋市・加古川市・姫路市等兵庫県南部や大阪府などは直接お会いして打ち合わせが可能です。<br>遠方の方からのご依頼も承っております！電話・メール・オンラインで対応が可能です。 お気軽にご相談下さい。</p>
	</div>
	</section>
</aside>


