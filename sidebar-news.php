
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






<?php
if(is_page('works') ) {get_sidebar('works');}
  elseif(in_category('27') ) {get_sidebar('works');}
  elseif(is_category('25') ) {get_sidebar('blog');}
  elseif(is_page('flowprice') ) {get_sidebar('price');}
  elseif(is_page('template') ) {get_sidebar('price');}
 elseif(is_page('template-sp') ) {get_sidebar('price');}
 elseif(is_page('card-plan') ) {get_sidebar('price');}
else {
  get_sidebar();
}
?>
