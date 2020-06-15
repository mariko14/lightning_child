<?php if ( is_active_sidebar( 'footer-upper-widget-1' ) ) : ?>
<div class="section sectionBox siteContent_after">
	<div class="container ">
		<div class="row ">
			<div class="col-md-12 ">
			<?php dynamic_sidebar( 'footer-upper-widget-1' ); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php do_action( 'lightning_footer_before' ); ?>

<footer id="footer" class="relative">
	<div class="footer-inner wrap flex-area-center">
		<div class="footer-info">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footerlogo.png" alt="女性・子供向けホームページ制作(神戸・明石)Sourire web studio" width="173" height="161">
			</a>
		</div>
	       <div class="footer_nav flex-area-left">
		        <ul class="f1">
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="女性デザイナーによる女性・子供向けホームページ制作(神戸・明石)Sourire web studio"><span>HOME</span></a></li>
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/about/" title="ABOUT"><span>ABOUT</span></a></li>
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/works/" title="制作実績"><span>WORKS</span></a></li>
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/qa/" title="よくある質問"><span>Q&amp;A</span></a></li>          
		        </ul>
		        <ul class="f2">
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/" title="流れと価格"><span>FLOW&amp;PRICE</span></a>
		              <ul>
		                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#templateplan" title="テンプレートプランについて"><span>テンプレートプラン</span></a>
							<ul>
		                		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/template-sp/" title="テンプレート一覧"><span>スマホ対応テンプレート一覧</span></a></li>
							</ul>
		                </li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#pack_price" title="料金の目安"><span>パックプラン</span></a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#price-list" title="料金の目安"><span>料金の目安</span></a></li>
			            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#flow-list" title="制作の流れ"><span>制作の流れ</span></a></li>
		              </ul>
					</li>
		        </ul>
		        <ul class="f3">
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/" title="お問い合わせ｜女性デザイナーによる女性・子供向けホームページ制作(神戸・明石)Sourire web studio"><span>CONTACT</span></a></li>
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/blog/" title="ブログ"><span>BLOG</span></a></li>
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/news/" title="新着情報"><span>新着情報</span></a></li> 
		 
		           <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/policy/" title="プライバシーポリシー"><span>プライバシーポリシー</span></a></li>
		        </ul>
	     </div>
	 
	</div>
	
	
	<h2 id="fooder-h2">ホームページ制作・ネットショップ制作・ブログカスタマイズなどは女性デザイナーによる女性・子供向けかわいいホームページ制作(神戸・明石)Sourire web studioへ</h2>
	<p id="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights Reserved.</p>
</footer>

<p id="page-top"><a href="#header" class="scroll"><span>PAGE TOP</span></a></p>
<?php wp_footer(); ?>
<script>
    new WOW().init();
</script>
</body>
</html>
