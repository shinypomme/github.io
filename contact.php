<?php
session_start();

//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

function escape($str) {
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177868389-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-177868389-1');
    </script>
    <meta charset="utf-8">
    <meta name="description" content="愛知県の現役歯科衛生士が実施するわんちゃんに安心の無麻酔歯石除去。わんちゃんをリラックスさせながら機械は使わずにオールハンドで丁寧に歯石除去致します。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShinyPomme | 現役歯科衛生士が行う犬の無麻酔歯石除去</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
    <header>
      <div class="container">
        <a class="header-left" href="index.html">
          <img class="logo" src="picture/logo.png" alt="ShinyPomme">
        </a>
        <div class="header-right">
          <div class="header-menu">
            <ul>
              <li><a class="a-btn" href="attention.html">Attention<br><span class="hd-r-span">犬の歯周病に注意</span></a></li>
              <li><a class="a-btn" href="care.html">Care<br><span class="hd-r-span">正しいケア</span></a></li>
              <li><a class="a-btn" href="service.html">Service<br><span class="hd-r-span">当店の無麻酔施術</span></a></li>
              <li><a class="a-btn" href="contact.php">Contact<br><span class="hd-r-span">お問い合わせ</span></a></li>
              <li><a class="a-btn" href="FAQ.html">FAQ<br><span class="hd-r-span">よくある質問</span></a></li>
            </ul>
          </div>
          <div class="header-follow">
            <a href="https://www.instagram.com/ShinyPomme/" class="insta_btn2" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-instagram"></i> <span>@shinypomme</span>
            </a>
          </div>
        </div>
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="globalMenuSp">
            <ul>
              <li><a href="attention.html">Attention</a></li>
              <li><a href="care.html">Care</a></li>
              <li><a href="service.html">Service</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="FAQ.html">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <div class="top-wrapper">
      <div class="container">
        <div class="container-hp">
          <h1>ShinyPomme</h1>
          <p class="container-p">大切なわんちゃんに、<br>安心なデンタルケアを。</p>
        </div>
      </div>
    </div>
    <!-- コンテンツ -->
    <div class="main-wrapper">
      <div class="heading-contact">
        <h2>Contact form<span> ~お問い合わせ~</span></h2>
        <p>お問い合わせは以下のフォームからご連絡できます。</p>
        <p>予約希望の場合はその旨を記載頂ければ、予約可能な営業日と時間を添えて返信いたします。</p>
        <div class="contact_input">
          <form action="confirm.php" method="post">
            <div class="form-item">お名前：</div>
            <input type="text" name="name">
            <div class="form-item">メールアドレス：</div>
            <input type="text" name="mail">
            <div class="form-item"> お問い合わせ内容： </div>
            <textarea name="body"></textarea>
            <div class="submit-confirm">
              <input id="submit_btn" type="submit" name="btn_confirm" value="入力内容の確認">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- 以上、コンテンツ -->
    <footer>
      <div class="contact-wrapper">
        <div class="container">
          <div class="contact-h2">
            <h2 class="fotter-menu">　CONTACT　</h2>
          </div>
          <p class="contact-p">ご予約、お問い合わせは以下からお気軽にどうぞ。</p>
          <ul>
            <li>
              <a class="a-btn" href="contact.php">
                ＞
                <img class="contact-img" src="picture/form.png" alt="" align="top">
                 Contact form
              </a>
            </li>
            <li>
              <a class="a-btn" href="tel:080-9738-0032">
                ＞
                <img class="contact-img" src="picture/tell.png" alt="" align="top">
                 080-9738-0032
              </a>
            </li>
            <li>
              <a class="a-btn" href="mailto:shinypomme@gmail.com">
                ＞
                <img class="contact-img" src="picture/mail.png" alt="" align="top">
                 shinypomme@gmail.com
              </a>
            </li>
            <li>
              <a class="a-btn" href="https://line.me/ti/p/PopZYbZgiJ" target="_blank" rel="noopener noreferrer">
                ＞
                <img class="contact-img" src="picture/line.png" alt="" align="top">
                 LINE@
              </a>
            </li>
            <li>
              <a class="a-btn" href="https://www.instagram.com/ShinyPomme/" target="_blank" rel="noopener noreferrer">
                ＞
                <img class="contact-img" src="picture/Instagram.png" alt="" align="top">
                 Instagram
              </a>
            </li>
          </ul>
          <div class="opening-hours">
            <h2 class="fotter-menu">　OPENING HOURS　</h2>
            <div class="time">
              <p>受付時間： 9:30 〜 16:00</p>
              <p>予約枠： 9:30 / 11:00 / 13:00 / 14:30 / 16:00</p>
              <p>営業日は<a class="a-btn" href="https://www.instagram.com/ShinyPomme/" target="_blank" rel="noopener noreferrer">Instagram</a>をご確認ください。</p>
            </div>
          </div>
          <div class="fee">
            <h2 class="fotter-menu">　Fee　</h2>
            <div class="fee-con">
              <p>初回：13,200円（税込）</p>
              <p>半年以内の再来店：6,600円（税込）</p>
            </div>
          </div>
        </div>
      </div>
      <div class="operated-wrapper">
        <div class="container">
          <div class="operated-h2">
            <h2 class="fotter-menu">　EVENT　</h2>
          </div>
          <div class="operated-part">
            <p>楽しいEventを計画しています。
            <p>詳しくは<a class="a-btn" href="https://www.instagram.com/ShinyPomme/" target="_blank" rel="noopener noreferrer">Instagram</a>をご確認ください。</p>
          </div>
          <div class="operated-h2">
            <h2 class="fotter-menu">　OPERATED BY　</h2>
          </div>
          <div class="operated-part">
            <p>
              <img class="operated-img" src="picture/woman.png" alt="名前" align="top">
              大久保 萌恵
                <span class="name-en">(Moe Okubo)</span>
            </p>
            <img class="operator" src="picture/sp_4.jpg" alt="施術者">
            <p class="profile">現役歯科衛生士として長年培ったデンタルケア技術を基調とする繊細かつ高度な歯石取りが自慢。好きなことへの探求心と大好きなゴールデンレトリーバーへの愛着心から、わんちゃんのための予防サロンを開業。誰とでもフレンドリーに話し、周りへの気配りも欠かさない、誰からも愛される存在。</p>
          </div>
          <div class="operated-part">
            <p>
              <img class="operated-img" src="picture/home.png" alt="住所" align="top">
              名古屋市中区大須　大須観音駅徒歩2分
              <p class="address">
                詳細な場所は予約時にお伝えします。
              </p>
            </p>
          </div>
          <div class="register-part">
            <p>
              保管　第310916号　登録：2020/3/19　有効：2025/3/18　動物取扱責任者：okubo
            </p>
            <p>
              Copyright © Shiny Pomme All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
