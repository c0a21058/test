<header>
  <div class="header-inner">
    <div class="logo">
      <img src="your-logo.png" alt="ロゴ">
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
  <div class="main-visual-inner">
    <h1>お客様のデジタル課題解決に必要なサービス・パッケージをワンストップで提供</h1>
    <p class="description">
      トランスコスモスはデジタルマーケティングサービスは、インターネットインフラを活用したマーケティング活動を支援。
      WEBサイト構築・運用、オムニチャネルマーケティング、分析・リサーチサービスなどを提供します。
    </p>
  </div>
</section>
<section class="services">
  <h2>サービス紹介</h2>
  <div class="service-list">
    <ul>
      <li>公共・自治体向けDXソリューション</li>
      <li>WEBインテグレーションサービス</li>
      </ul>
  </div>

  <div class="service-details">
    <div class="service-box left-box">
      <h3>BtoBコンテンツマーケティング</h3>
      <p>広告だけでなく新しい集客手法を提案していきます。...</p>
      <a href="#" class="button">詳しく見る</a>
    </div>
    <div class="service-box right-box">
      <h3>バーチャルオンサイトサービス</h3>
      <p>常駐にて提供していたオンサイトのディレクション業務/...</p>
      <a href="#" class="button">詳しく見る</a>
    </div>
  </div>
</section>

header {
  background-color: #222222;
  padding: 30px 0;
  color: #ffffff;
}

.header-inner {
  max-width: 1200px; /* 全体の幅に合わせて調整 */
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
  padding: 0;
  margin: 0;
  display: flex;
  gap: 34px; /* 各メニュー項目の間隔 */
}

.nav-menu a {
  color: #ffffff;
  font-size: 16px;
  line-height: 1.8em;
  text-decoration: none;
}
.main-visual {
  background-image: url('main-visual.png');
  background-size: 900px 328px;
  background-position: center;
  background-repeat: no-repeat;
  padding: 80px 0; /* 上下の余白 */
  text-align: center;
}

.main-visual h1 {
  font-size: 30px;
  font-weight: bold;
  line-height: 1.8em;
  color: #222222; /* 指定箇所以外のテキストカラー */
  margin-bottom: 50px;
}

.main-visual .description {
  font-size: 16px;
  line-height: 1.8em;
  color: #222222;
}
.services h2 {
  font-size: 24px;
  font-weight: bold;
  line-height: 1.8em;
  margin-bottom: 30px;
}

.service-list ul {
  list-style: none;
  padding: 0;
  margin: 0;
  background-color: #f5f5f5; /* 背景色 */
  border: 2px solid #c7474f; /* ボーダー */
}

.service-list li {
  font-size: 16px;
  line-height: 2.0em;
  padding: 15px 30px;
}

.service-details {
  display: flex;
  justify-content: space-between;
  margin-top: 80px;
}

.service-box {
  width: 48%; /* 2つのブロックが横並びになるように調整 */
  border: 4px solid #222222;
  padding: 50px 30px;
}

.service-box h3 {
  font-size: 18px;
  font-weight: bold;
  line-height: 1.8em;
  margin-bottom: 30px;
}

.service-box p {
  font-size: 16px;
  line-height: 1.8em;
  margin-bottom: 50px;
}

.button {
  display: inline-block;
  background-color: #222222;
  color: #ffffff;
  font-size: 16px;
  font-weight: regular;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
}