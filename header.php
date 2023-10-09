<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php the_title(); ?></title>
  <meta name="description" content="学園祭最大規模の観客4000人を動員する名物企画。陽が沈み煌びやかなステージで、現役の早稲田に所属する多くの演者と協力団体で早稲田祭を盛り上げる！！" />
  <link rel="stylesheet" type="text/css" href="style.css" media="all" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all">
  <script type="text/javascript" src="<?php echo get_theme_file_uri('js/loading.js'); ?>"></script>
  <?php wp_head(); ?>
</head>

<noscript><body></noscript>
  <?php if (is_front_page()) { ?>
  <div class="loading" role="loading">
    <div class="lo-main">
      <img id="loadingLogo" class="opacity-0" src="<?php echo get_theme_file_uri(
        'images/loading-white.png'
      ); ?>">
      <h1>now loading...</h1>
    </div>
  </div>
  <?php } ?>
  <div class="container">
    <!-- ヘッダー　ここから -->
    <header>
      <div class="header">
        <a href="<?php echo get_home_url() ?>">
          <img src="<?php echo get_theme_file_uri(
            'images/titleLogo.png'
          ); ?>" alt="" />
          <img src="<?php echo get_theme_file_uri(
            'images/blackLogo.png'
          ); ?>" alt="" />
        </a>
        <div class="toggle-btn pc">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <nav id="navi">
        <ul>
          <li><a href="<?php echo get_home_url() ?>">TOP</a></li>
          <li>
            <a href="./about">企画概要</a>
            <ul>
              <li>ストーリー</li>
              <li>出演者一覧</li>
            </ul>
          </li>
          <li>
            <a href="./sponsors">協賛</a>
            <ul>
              <li>コラボメニュー</li>
              <li>協賛企業・協力企業</li>
            </ul>
          </li>
        </ul>
      </nav>

      <div id="mask"></div>
    </header>
    <!-- ヘッダー　ここまで -->