<?php
/**
 * Template Name: home.php
 */
?>

<?php get_header(); ?>

<!-- メインコンテンツ　ここから -->
<main>
  <section id="title-wrapper">
    <div class="title-image-wrapper">
      <div class="video-wrapper">
        <video id="video" webkit-playsinline playsinline muted autoplay loop></video>
      </div>
      <p class="event">４年が贈る最後の企画</p>
      <div class="place-and-count">
        <p class="date">11月4日(土)16:25〜<br />大隈講堂前ステージ</p>
        <div class="countdown">
          <p class="until">開催まで</p>
          <span class="countdown__time js-countdown-day">0</span>
          <span class="countdown__unit">:</span>
          <span class="countdown__time js-countdown-hour">00</span>
          <span class="countdown__unit">:</span>
          <span class="countdown__time js-countdown-min">00</span>
          <span class="countdown__unit">:</span>
          <span class="countdown__time js-countdown-sec">00</span>
          <span class="countdown__unit">:</span>
          <span class="countdown__time js-countdown-ms">00</span>
        </div>
        <div class="flex-wrapper">
          <p>DAYS</p>
          <p>HOURS</p>
          <p>MINS</p>
          <p>SECS</p>
          <p>MSECS</p>
        </div>
      </div>
    </div>
  </section>

  <section id="explain">
    <img class="line" src="<?php echo get_theme_file_uri(
      'images/topline.webp'
    ); ?>" alt="" />
    <div class="explain-content">
      <p>
        <span>誰</span>が<span>いつ</span>始めたのかわからない。<br />決まり事は<br /><span>「4年生が行う」</span><br /><span>「1日目の隈ステの大トリ」</span><br /><span>ただこれだけである。</span><br />学園祭最大規模の観客4000人を動員する名物企画<br />陽が沈み煌びやかなステージで、<br />現役の早稲田に所属する多くの演者と協力団体で<br />早稲田祭を盛り上げる！！
      </p>
      <div class="black-image">
        <h1>中夜祭とは</h1>
      </div>
    </div>
  </section>
  <div class="swiper-parent fade">
    <!-- Swiper START -->
    <div class="swiper-container">
      <!-- メイン表示部分 -->
      <div class="swiper-wrapper">
        <!-- 各スライド -->
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri(
          'images/2022_1.webp'
        ); ?>" alt="Swiper01"></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri(
          'images/2022_2.webp'
        ); ?>" alt="Swiper02"></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri(
          'images/girls.JPG'
        ); ?>" alt="Swiper03"></div>
    </div>
    <img class="line" src="<?php echo get_theme_file_uri(
      'images/bottomline.webp'
    ); ?>" alt="" />
  </div>
  <div class="overview">
    <h1>企画概要</h1>
    <div class="story">
      <img class="storyimg" src="<?php echo get_theme_file_uri(
        'images/Story.webp'
      ); ?>" alt="">
      <a href="./about"><img class="storymore" src="<?php echo get_theme_file_uri(
        'images/arrow.webp'
      ); ?>" alt=""></a>
    </div>
    <div class="performer">
      <img class="performerimg" src="<?php echo get_theme_file_uri(
        'images/performer.webp'
      ); ?>" alt="">
      <a href="./about#performer"><img class="performermore" src="<?php echo get_theme_file_uri(
        'images/arrow.webp'
      ); ?>" alt=""></a>
    </div>
  </div>
  <div class="collaboration">
    <div class="menubox">
      <h1>コラボメニュー</h1>
    </div>
  </div>
  <div class="sponsor">
    <img class="rainbow-vertical" src="<?php echo get_theme_file_uri(
      'images/縦１.webp'
    ); ?>" alt="" />
    <div class="sponsor-title">
      <img src="<?php echo get_theme_file_uri(
        'images/sponsor.webp'
      ); ?>" alt="" />
      <div class="sponsor-decoration"></div>
    </div>
    <img class="rainbow-horizontal" src="<?php echo get_theme_file_uri(
      'images/横２.webp'
    ); ?>" alt="" />
    <a href=""><img class="more" src="<?php echo get_theme_file_uri(
      'images/arrow.webp'
    ); ?>" alt="" /></a>
  </div>
  <div class="contact">
    <img class="contact-title" src="<?php echo get_theme_file_uri(
      'images/contact.webp'
    ); ?>" alt="" />
    <form action="./" method="post" class="contact-form">
      <div class="name">
        <div class="form-title">
          <p>名前</p>
        </div>
        <input type="text" name="contactName" />
      </div>
      <div class="mail">
        <div class="form-title">
          <p>メール<br />アドレス</p>
        </div>
        <input type="text" name="contactEmail" />
      </div>
      <div class="content">
        <div class="form-title">
          <p>内容</p>
        </div>
        <textarea name="contactBody" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="send-button">
        <img src="<?php echo get_theme_file_uri('images/send.webp'); ?>">
        <input type="submit" name="contactSubmit" alt="送信">
      </div>
    </form>
  </div>
</main>
<!-- メインコンテンツ　ここまで -->

<?php get_footer(); ?>
