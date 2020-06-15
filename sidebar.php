<aside id="sidebar">
<?php if(is_page('flowprice')):?>
	<div class="side-list">
	 	<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side_price.png" width="265" height="74" alt="PRICE" /></h3>
	 	<ul class="wow fadeIn">
			 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#templateplan"  class="scroll"><span>テンプレートプラン</span></a>
			   <ul>
			     <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/template-sp/"><span>スマホ対応テンプレート一覧</span></a></li>
			   </ul>
			    </li>
			 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#pack_price"  class="scroll"><span>ホームページ制作パック料金</span></a></li>
			 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#price-list"  class="scroll"><span>ホームページ制作料金</span></a></li>
			 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#flow-list"  class="scroll"><span>制作の流れ</span></a></li>
		 </ul>
	
	</div>
<?php endif; ?>

<?php if(is_page('template-sp')):?>
	<div class="side-list">
	 	<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side_price.png" width="265" height="74" alt="PRICE" /></h3>
	 	<ul class="wow fadeIn">
			 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#templateplan"  class="scroll"><span>テンプレートプラン</span></a>
			   <ul>
			     <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/template-sp/"><span>スマホ対応テンプレート一覧</span></a></li>
			   </ul>
			    </li>
			 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#pack_price"  class="scroll"><span>ホームページ制作パック料金</span></a></li>
			 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#price-list"  class="scroll"><span>ホームページ制作料金</span></a></li>
			 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#flow-list"  class="scroll"><span>制作の流れ</span></a></li>
		 </ul>
	
	</div>
<?php endif; ?>
	
	
	<a class="over banner" href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/">
		  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-template.jpg" alt="大人気の素早く手軽な格安ホームページ制作テンプレートプラン" width="265" height="180">
	</a>
	<div id="side-banner-area">
		<a class="over banner" href="<?php echo esc_url( home_url( '/' ) ); ?>/category/blog/">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/baner_blog.jpg" alt="女性デザイナーのつれづれブログへ" width="265" height="106">
		</a>
	    <a class="over banner" href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/">
		    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/baner_mitumori.jpg" alt="お見積もり" width="265" height="105">
		</a>
		<a class="over banner" href="http://chomo-photoisland.com/">
		   <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/baner-album.jpg" alt="アルバムサイトへ" width="265" height="100">
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
