<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transcosmos Digital Marketing Services</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <div class="header-inner">
      <div class="logo">
        <img src="https://via.placeholder.com/368x74.png?text=ロゴ" alt="ロゴ">
      </div>
      <nav class="nav-menu">
        <ul>
          <li><a href="#">ホーム</a></li>
          <li><a href="#">ニュース</a></li>
          <li><a href="#">撮影</a></li>
          <li><a href="#">サービス</a></li>
          <li><a href="#">採用</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="main-visual">
    <div class="main-visual-content">
      <h1 class="main-title">お客様のデジタル課題解決に必要なサービス・パッケージをワンストップで提供</h1>
      <p class="description">
        トランスコスモスはデジタルマーケティングサービスは、インターネットインフラを活用したマーケティング活動を支援。
        WEBサイト構築・運用、オムニチャネルマーケティング、分析・リサーチサービスなどを提供します。
      </p>
    </div>
  </section>

  <main>
    <section class="services-list-section">
      <div class="content-container">
        <h2 class="section-title">サービス紹介</h2>
        <div class="service-list-box">
          <ul>
            <li>公共・自治体向けDXソリューション</li>
            <li>WEBインテグレーションサービス</li>
            <li>ソーシャルメディア運用サービス</li>
            <li>LINE 公式アカウントビジネス活用</li>
            <li>チャットボット・有人チャット</li>
            <li>FAQソリューション</li>
          </ul>
        </div>
      </div>
    </section>
    
    <section class="web-integration-section">
      <div class="content-container">
        <h2 class="section-title">WEBインテグレーションサービス</h2>
        <div class="service-details-grid">
          <div class="service-box">
            <h3 class="box-title">BtoBコンテンツマーケティング</h3>
            <p class="box-text">広告だけでなく新しい集客手法を提案していきます。顧客に対してブランドイメージを深く浸透させる目的から作成したオウンドメディア/サービスをご用意。</p>
            <a href="#" class="button">詳しく見る</a>
          </div>
          <div class="service-box">
            <h3 class="box-title">バーチャルオンサイトサービス</h3>
            <p class="box-text">常駐にて提供していたオンサイトのディレクション業務/広告、プランニング業務を時間単位でリモート提供するサービスです。</p>
            <a href="#" class="button">詳しく見る</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-inner">
      <p>© Transcosmos inc. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>

/* リセットスタイル */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: sans-serif;
  color: #222222;
}

.content-container {
  max-width: 1200px; /* 全体の幅 */
  margin: 0 auto;
}

/* ヘッダーセクション */
header {
  background-color: #222222;
  padding: 30px 0;
}

.header-inner {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo img {
  width: 368px;
  height: 74px;
}

.nav-menu ul {
  list-style: none;
  display: flex;
  gap: 34px;
}

.nav-menu a {
  color: #ffffff;
  font-size: 16px;
  line-height: 1.8em;
  text-decoration: none;
}

/* メインビジュアルセクション */
.main-visual {
  padding: 80px 0 50px;
  text-align: center;
}

.main-visual-content {
  max-width: 900px;
  margin: 0 auto;
}

.main-title {
  font-size: 30px;
  font-weight: bold;
  line-height: 1.8em;
  margin-bottom: 50px;
}

.description {
  font-size: 16px;
  line-height: 1.8em;
}

/* サービス紹介セクション */
.services-list-section {
  padding: 80px 0 30px;
}

.section-title {
  font-size: 24px;
  font-weight: bold;
  line-height: 1.8em;
  margin-bottom: 30px;
}

.service-list-box {
  border: 2px solid #c7474f;
  background-color: #f5f5f5;
  padding: 30px 15px;
}

.service-list-box ul {
  list-style: none;
}

.service-list-box li {
  font-size: 16px;
  line-height: 2.0em;
  padding: 10px 0;
}

/* WEBインテグレーションサービスセクション */
.web-integration-section {
  padding: 80px 0;
}

.service-details-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
}

.service-box {
  padding: 50px;
  border: 4px solid #222222;
}

.box-title {
  font-size: 18px;
  font-weight: bold;
  line-height: 1.8em;
  margin-bottom: 30px;
}

.box-text {
  font-size: 16px;
  line-height: 1.8em;
  margin-bottom: 50px;
}

.button {
  display: inline-block;
  font-size: 16px;
  line-height: 1.8em;
  text-decoration: none;
  padding: 15px 50px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
  background-color: #222222;
  color: #ffffff;
}

.button:hover {
  background-color: #666666;
}

/* フッターセクション */
footer {
  padding: 100px 0;
  background-color: #f5f5f5;
  text-align: center;
}

.footer-inner {
  max-width: 1200px;
  margin: 0 auto;
}

footer p {
  font-size: 14px;
  line-height: 1.8em;
  color: #222222;
}