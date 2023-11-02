<?php
/**
 * Template Name: page-sponsors.php
 */
?>

<?php get_header(); ?>

<!-- メインコンテンツ　ここから -->
<main>
      <div class="sponsor">
        <h1 class="sponsor-h1">sponsors</h1>
      </div>

      <div class="korabo">
        <h2 class="korabo-h2">コラボメニュー</h2>
      </div>

      <div class="menu01_wrap">
        <img src="<?php echo get_theme_file_uri("images/images.01.jpg");?>" />
        <div class="menu01-texts_wrap">
          <div class="menu-texts">
            <h2>menu</h2>
            <p>01</p>
            <p><a href="https://purantan-waseda.com/" class="shop">ぷらんたん</a></p>
            <p>たぬ焼きパスタ</p>
          </div>
        </div>
      </div>

      <div class="menu02_wrap">
        <img src="<?php echo get_theme_file_uri("images/images.02.jpg");?>" />
        <div class="menu02-texts_wrap">
          <div class="menu-texts">
            <h2>menu</h2>
            <p>02</p>
            <p><a href="https://www.instagram.com/mochida_waseda/" class="shop">居酒屋もちだ</a></p>
            <p>焼きそば</p>
          </div>
        </div>
      </div>

      <div class="menu03_wrap">
        <img src="<?php echo get_theme_file_uri("images/images.03.jpg");?>" />
        <div class="menu03-texts_wrap">
          <div class="menu-texts">
            <h2>menu</h2>
            <p>03</p>
            <p><a href="https://x.com/kokorobazuboshi?s=20" class="shop">図星はなれ</a></p>
            <p>たぬきご飯</p>
          </div>
        </div>
      </div>

      <div class="menu04_wrap">
        <img src="<?php echo get_theme_file_uri("images/images.04.jpg");?>" />
        <div class="menu04-texts_wrap">
          <div class="menu-texts">
            <h2>menu</h2>
            <p>04</p>
            <p><a href="https://wasshoi.owst.jp/" class="shop">居酒屋わっしょい</a></p>
            <p>たぬ焼きうどん</p>
          </div>
        </div>
      </div>

      <div class="kyousan">
        <h3 class="kyousan-h3">協賛企業・団体</h3>
        <p>coming soon...</p>
      </div>

    </main>
<!-- メインコンテンツ　ここまで -->

<?php get_footer(); ?>
