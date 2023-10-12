<?php
/**
 * Template Name: page-about.php
 */
?>

<?php get_header(); ?>

    <!-- メインコンテンツ　ここから -->
    <main>
      <div class="background">
        <!--企業概要-->
        <section>
          <div class="kikakugaiyou-background">
            <h1>企画概要</h1>
          </div>
        </section>
        <!--ストーリー-->
        <section>
          <div class="story">
            <h1>ストーリー</h1>
            <p>
              早稲田祭の時期に必ず現れる”アイツら”が舞台を沸かす
              日常では潜んでいたものたちが、様々なトラブルや事件と出会う物語
              出会った先で何が起こるのか、誰が祭りを沸かすのか
              11月4日、暮れの大隈講堂ステージを見逃すな!!
            </p>
          </div>
        </section>
        <!--団体一覧-->
        <section id="performer">
          <div class="danntai">
            <div class="itirann">
              <h1>出演者団体一覧</h1>
            </div>
            <!-- 下駄っぱーず-->
            <div class="geta">
              <div class="geta-photo-wrapper">
                <p>下駄っぱーず</p>
                <img class="geta-photo" src="<?php echo get_theme_file_uri(
                  'images/geta.webp'
                ); ?>" height="92px" width="81px" />
              </div>
              <div class="geta-sentence">
                <p>
                  私たちは、早稲田の踊る下駄集団「下駄っぱーず」です！下駄を履いてリズムを刻む世界で唯一無二
                  、文字通りのオールジャンルダンスパフォーマンスサークルとして全国各地を練り歩き、会場に笑顔を
                  お届けしています！「ムゲンダイ」というテーマのもと、常に新しい挑戦を続けてきた私たちのパッシ
                  ョンで、中夜祭も存分に盛り上げさせていただきます！どうぞご期待ください！
                </p>
              </div>
            </div>
            <!--よさこいチーム-->
            <div class="yosa">
              <div class="yosa-sentence">
                <p>
                  早稲田大学よさこいチーム東京花火は、学生チームでは珍しい高知系よさこいチームとして、150人
                  で活動しています。男振りの力強さ、女振りの扇子を用いた華麗な舞が魅力の一つです。また、学生チ
                  ームには珍しい纏も演舞に取り入れております。また、振り、曲、衣装、MCを学生が主体となり制作し
                  、東京花火らしさを常に意識しながら日々活動に励んでいます。中夜祭では、表情豊かなパフォーマン
                  スにより多彩な世界観をお見せ致します。
                </p>
              </div>
              <div class="yosa-photo-wrapper">
                <p>よさこいチーム<br>東京花火</p>
                <img class="yosa-photo" src="<?php echo get_theme_file_uri(
                  'images/yosakoi.webp'
                ); ?>" height="85px" width="85px">
              </div>
            </div>
            <!--バンカライズム-->
            <div class="bannkara">
              <div class="bannkara-photo-wrapper">
                <p>バンカライズム<br>万色主義</p>
                <img class="bannkara-photo" src="<?php echo get_theme_file_uri(
                  'images/bannkara.webp'
                ); ?>" height="90px" width="110px">
              </div>
              <div class="bannkara-sentence">
                <p>
                  あなたは野心を持っていますか。現代を生きる中で、本当にやりたいことを見失ってはいませんか。
                  周りに認めてもらえないこと、他人と異なることを恐れていませんか。バンカライズムは、そんなあ
                  なたの野心に火をつけるために踊る「早稲田の学ラン雑技団」です。たとえ人と違っても、何かに夢
                  中になるあなたは美しいと我々が証明してみせます。あなたの心の叫びを体現したようなパフォーマ
                  ンスをお楽しみください。
                </p>
              </div>
            </div>
            <!--夏目坂４６-->
            <div class="natsume">
              <div class="natsume-sentence">
                <p>
                みなさんこんにちは！夏目坂46です！私たちは、2019年に結成された早稲田大学発のアイドルコピーダンスサークルです！坂道系を中心に、様々なアイドルの曲をコピーさせていただいています！普段はUNIDOLというアイドルコピーダンスの大会での優勝を目指して様々な活動しています。公式snsやその他メンバーの個人snsもあるので気になった方は是非チェックしてみてください！
                </p>
              </div>
              <div class="natsume-photo-wrapper">
                <p>夏目坂46</p>
                <img class="natsume-photo" src="<?php echo get_theme_file_uri(
                  'images/natsume.webp'
                ); ?>" height="103.68px" width="81px">
              </div>
            </div>
          </div>
      </div>
      </section>
      <img class="smog1" src="<?php echo get_theme_file_uri('images/smog-right.webp') ?>" width="375px">
      <img class="smog2" src="<?php echo get_theme_file_uri('images/smog-left.webp') ?>" width="=375px">
      <img class="smog3" src="<?php echo get_theme_file_uri(
        'images/smog-right.webp'
      ); ?>" width="375px">
    </main>
    <!-- メインコンテンツ　ここまで -->

<?php get_footer(); ?>
