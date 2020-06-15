<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
global $lightning_theme_options;
$lightning_theme_options = get_option( 'lightning_theme_options' );
?>
<?php wp_head(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<script src="/wp-content/themes/lightning_child/js/scripts.js"></script>
<script src='https://www.google.com/recaptcha/api.js?render=6LeveoUUAAAAABxc-PzhemzXnx5fMWXhUtrsiNjE'></script>
<script src="https://webfont.fontplus.jp/accessor/script/fontplus.js?ullvfqPH~b0%3D&box=btWBxIlMSgY%3D&aa=1&ab=1" charset="utf-8"></script>
</head>
<body <?php body_class(); ?>>
<header id="header">
	<div class="inner">
		<h1 id="header-h1">女性デザイナーによる女性・子供向けかわいいホームページ制作(神戸・明石)Sourire web studio.</h1>
        <h2 id="header-logo">
	        <a class="logo over" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="トップページへ" rel="home">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="女性・子供向けホームページ制作(神戸・明石)Sourire web studio">
		    </a>
	    </h2>
	</div>
</header>

  <nav id="mainNav">
    <div class="wrap">
		<a class="menu" id="menu" role="button" aria-controls="navigation" aria-expanded="false" aria-label="メニュー一覧を開く" tabindex="0">
			<span>MENU</span>
		</a>
		<div class="panel flex-area-center" role="navigation" id="navigation">
		    <ul class="nav-left flex-area">
		      <li class="home over nav_left menu-item">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="home" class="flex-area-left">
			        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home.png" width="98" height="40" alt="子供・女性向けかわいいホームページ制作Sourire web studioのトップページへ">
		          <span class="pc-no">トップページ</span>
		        </a>
		      </li>
		      <li class="about over nav_left menu-item">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/about/" id="about" class="flex-area-left">
			        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about.png" width="106" height="39" alt="子供・女性向けかわいいホームページ制作Sourire web studioの自己紹介">
		          <span class="pc-no">自己紹介</span>
		        </a>
		      </li>
		      <li class="works over nav_left menu-item">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/works" id="works" class="flex-area-left">
			        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/works.png" width="110" height="38" alt="子供・女性向けかわいいホームページ制作Sourire web studioの制作実績">
		          <span class="pc-no">制作実績</span>
		        </a>
		      </li>
		      
		    </ul>
		    <ul class="nav-right flex-area">
		      <li class="flow over nav_right menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/" id="price" class="flex-area-left">
			        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow.png" width="106" height="36" alt="子供・女性向けかわいいホームページ制作Sourire web studioの料金と制作の流れ">
		          <span class="pc-no">料金と制作の流れ</span>
		        </a>
		        <ul class="sub-menu">
		          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children ">
		            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#templateplan" id="price-templateplan">
		              <span>テンプレートプラン</span>
		            </a>
		            <ul>
		              <li class="menu-item menu-item-type-post_type menu-item-object-page">
		                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/template-sp/" id="price-template_sp">
		                  <span>スマホ対応テンプレート一覧</span>
		                </a>
		              </li>
		            </ul>
		          </li>
		          <li class="menu-item menu-item-type-custom menu-item-object-custom">
		            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#pack_price" id="price-pack">
		              <span>ホームページ制作パックプラン</span>
		            </a>
		          </li>
		          <li class="menu-item menu-item-type-custom menu-item-object-custom">
		            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/flowprice/#flow-list" id="price-flow">
		              <span>制作の流れ</span>
		            </a>
		          </li>
		        </ul>
		      </li>
		      <li class="qa over nav_right menu-item">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/qa/" id="qa" class="flex-area-left">
			        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/qa.png" width="84" height="38" alt="子供・女性向けかわいいホームページ制作Sourire web studioのよくある質問へ">
		          <span class="pc-no">よくある質問</span>
		        </a>
		      </li>
		      <li class="blog over nav_right menu-item">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/blog/" id="blog" class="flex-area-left">
			        <span class="pc-no">ブログ</span>
		        </a>
		      </li>
		      <li class="contact over nav_right menu-item">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/" id="contact" class="flex-area-left">
			        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png" width="125" height="32" alt="子供・女性向けかわいいホームページ制作Sourire web studioのお問い合わせへ">
		          <span class="pc-no">お問い合わせ</span>
		        </a>
		      </li>
		    </ul>
		</div>
    </div>
  </nav>
