<!-- フッター　ここから -->
<footer>
  <section>
    <div class="saitoannai">
      <hr>
      <h1>11月4日（土）16:25~</h1>
      <div class="chuuyasai_big">
        <p>中夜祭</p>
      </div>

      <div class="kikakugaiyou_btn">
        <a class="link_big" href="<?php echo get_home_url() ?>">TOP</a>
        <a class="link_big" href="./about">企画概要</a>
        <a class="link_small" herf="./about">ストーリー</a>
        <a class="link_small1" herf="./about">出演者一覧</a>
        <a class="link_big" herf="./sponsors">協賛</a>
        <a class="link_small" herf="./sponsors">コラボメニュー</a>
        <a class="link_small1" herf="./sponsors">協賛企業・協力企業</a>
      </div>
      <h2>大隈講堂前ステージ</h2>
      <hr>
      <h3>copyright©中夜祭2023実行委員会</h3>

    </div>
    </div>
  </section>
</footer>
<!-- フッター　ここまで -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/8.0.0-beta.3/hls.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<input type="hidden" id="videoPath" value="<?php echo get_theme_file_uri(
  'images/movie.m3u8'
); ?>">
<script type="text/javascript" src="<?php echo is_front_page()
  ? get_theme_file_uri('main.js')
  : ''; ?>"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri('js/header.js') ?>"></script>
</div>
</body>

</html>