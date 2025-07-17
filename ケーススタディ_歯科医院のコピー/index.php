<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>さわやか歯科クリニック</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!---------- ヘッダー ---------->
  <section id="main">
  <div class="hero">
    <img src="images/img4.jpg" alt="背景画像" class="pc-top">
    <img src="images/top-sp.png" alt="背景画像" class="sp-top">
  </div>
  <header>
    <div class="header-inner">
      <div class="logo">
      <a href="index.html">
      <img src="images/logo2.svg" alt="ロゴ">
    </a>
    </div>
    <!-- ナビゲーション -->
     <nav id="nav-pc">
     <ul>
      <li><a href="news.html">お知らせ</a></li>
      <li><a href="doctor.html">スタッフ紹介</a></li>
      <li><a href="service.html">診療案内</a></li>
      <li><a href="index.html#access">アクセス</a></li>
      <li><a href="contact.html">お問い合わせ</a></li>
     </ul>
    </nav>
    </div>
    <!-- スマホ用メニューボタン -->
    <img id="menu-sp" src="images/button-menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display = 'block'">
    <!-- スマホ用ナビゲーション -->
    <nav id="nav-sp">
      <ul>
        <li>
          <img id="close" src="images/button-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
        </li>
        <li><a class="menu" href="news.html" onclick="document.getElementById('nav-sp').style.display = 'none'">お知らせ</a></li>
        <li><a class="menu" href="doctor.html" onclick="document.getElementById('nav-sp').style.display = 'none'">スタッフ紹介</a></li>
        <li><a class="menu" href="service.html" onclick="document.getElementById('nav-sp').style.display = 'none'">診療案内</a></li>
        <li><a class="menu" href="index.html#access" onclick="document.getElementById('nav-sp').style.display = 'none'">アクセス</a></li>
        <li><a class="menu" href="contact.html" onclick="document.getElementById('nav-sp').style.display = 'none'">お問い合わせ</a></li>
      </ul>
  </nav>
  </header>

  <main>
    <!----------  TOPページ ---------->
    <div class="main-content">
      <div class="main-text">
        地域の皆様が安心して通える、<br>
        家族みんなのための歯科医院
      </div>

      <div class="btn">
        <div class="reserved-btn">
        <img src="images/sp-btn.png" alt="スマホアイコン">
        <a href="">ネット予約</a>
      </div>

      <div class="tel-btn">
        <a href="tel:0000000000">📞00-0000-0000</a>
      </div>
    </div>
    </section>
  


    <!---------- 当院の特徴 ---------->
     <section id="ferture">
      <!-- 見出し -->
      <div class="title">
        <h1>FEATURE</h1>
        <h2>当院の特徴</h2>
      </div>
      <!-- 特徴 -->
       <div class="feature-content">
        <img src="images/feature_1.png" alt="コンテンツ①" class="ferture-pc">
        <img src="images/feature_2.png" alt="コンテンツ②" class="ferture-pc">
        <img src="images/feature_3.png" alt="コンテンツ③" class="ferture-pc">
        <img src="images/feature_1_sp.png" alt="コンテンツ①" class="ferture-sp">
        <img src="images/feature_2_sp.png" alt="コンテンツ②" class="ferture-sp">
        <img src="images/feature_3_sp.png" alt="コンテンツ③" class="ferture-sp">
       </div>
     </section>


     <!---------- ごあいさつ ---------->
      <section id="message">
        <!-- 見出し -->
      <div class="title">
        <h1>MESSAGE</h1>
        <h2>ごあいさつ</h2>
      </div>
      <!-- 院長からの挨拶 -->
        <div class="message-content">
          <div class="doctor-matsumoto">
          <img src="images/doctor2_matsumoto.jpg" alt="院長の写真">
        </div>
        <div class="doctor-message">
          <img src="images/message-content.png" alt="院長からの挨拶">
          </div>
        </div>
      </section>

      
      <!---------- 診療内容 ---------->
       <section id="service">
        <!-- 見出し -->
      <div class="title">
        <h1>SERVICE</h1>
        <h2>診療内容</h2>
      </div>
      <!-- 診療内容 -->
       <div class="service-content">
        <div class="top">
          <div class="service-content-1">
        <img src="images/service1.png" alt="一般歯科">
      </div>
      <div class="service-content-2">
        <img src="images/service2.png" alt="小児歯科">
      </div>
      </div>
      <div class="bottom">
        <div class="service-content-3">
        <img src="images/service3.png" alt="口腔外科">
      </div>
      <div class="service-content-4">
        <img src="images/service4.png" alt="予防歯科">
      </div>
      </div>
       </div>
       </section>


       <!---------- 診療時間・アクセス ---------->
       <section id="access">
        <!-- 見出し -->
      <div class="title">
        <h1>CLINIC HOURS・ACCESS</h1>
        <h2>診療時間・アクセス</h2>
      </div>

      <div class="access-content">
        <div class="access-title">
          <h2>診療案内</h2>
        </div>

        <div class="information">
        <div class="clinic-hour">
          <img src="images/clinic-hour.png" alt="診療時間カレンダー">
        </div>

        <div class="closed-day">
          <h2>休診日：水曜・金曜</h2>
        </div>

        <div class="adress">
          <h2>
            〒105-0001  東京都港区虎ノ門1丁目3-1<br>
            東京メトロ 虎ノ門駅より直結・徒歩1分<br>
          </h2>
          <p>
            ※駐車場はないので、近隣のコインパーキングをご利用ください
          </p>
        </div>

        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.280674341982!2d139.74691337607473!3d35.67009037259082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b9278cad6bd%3A0xf8a15f79423fdee0!2z44CSMTA1LTAwMDEg5p2x5Lqs6YO95riv5Yy66JmO44OO6ZaA77yR5LiB55uu77yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1751972209282!5m2!1sja!2sjp" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
       </div>
       </div>
       </section>

       <!---------- 予約 ---------->
       <section id="reserved">
        <div class="reserved-content">
        <h2>ご予約はオンラインで24時間受付中です。</h2>
        <p>
          当院は完全予約制です。予約なしで来院された場合、<br>
          待ち時間が発生することがあります。ご了承ください。
        </p>
        <div class="reserved-btn-end">
          <h2>ご予約はこちら</h2>
        </div>
      </div>
       </section>

  </main>

  <!-- フッター -->
  <footer>
    <div class="footer-inner">

       <!-- ナビゲーション -->
        <nav class="footer-nav">
          <ul>
            <li><a href="newshtml">お知らせ</a></li>
            <li><a href="doctor.html">スタッフ紹介</a></li>
            <li><a href="service.html">診療案内</a></li>
            <li><a href="index.html#access">アクセス</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
          </ul>
        </nav>

        <!-- ロゴ -->
       <div class="footer-logo">
        <a href="index.html">
       <img src="images/logo2.svg" alt="フッターのロゴ">
      </a>
    </div>

         <!-- コピーライト -->
          <div class="copyright">
            <small>&copy; さわやか歯科クリニック All right reserved.</small>
          </div>
        </div>
      </footer>
</body>
</html>