<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <!-- meta-->
    <title>ボールプール.com | <?= $itemname ?></title>
    <meta name="description" content="サイトの説明文（未提供）">
    <meta name="keywords" content="キーワード（未提供）">
    <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <!-- smartphone meta-->
    <meta name="viewport" content="width=1000px,user-scalable=0, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="http://example.com/webclipicon.png">
    <!-- ogp-->
    <meta property="fb:app_id" content="99999999999">
    <meta property="og:url" content="http://example.com/">
    <meta property="og:image" content="http://example.com/ogp.jpg">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ボールプール.com">
    <meta property="og:site_name" content="ボールプール.com">
    <meta property="og:description" content="サイトの説明文（未提供）">
    <meta property="og:locale" content="ja_JP">
    <!-- twitter card-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="ボールプール.com">
    <meta property="twitter:description" content="サイトの説明文（未提供）">
    <meta property="twitter:image" content="http://example.com/ogp.jpg">
    <!-- canonical url-->
    <link rel="canonical" href="http://example.com/">
    <!-- stylesheet-->
  <link href="../css/style.css" rel="stylesheet"></head>
  <body>
    <div class="wrapper">
      <header>
        <h1><a href="#"><img src="../img/logo.png" alt="ボールプール.com"></a></h1>
        <nav>
          <ul>
            <li><a href="#"><img src="../img/tel_off.png" alt="0120-71-1010"></a></li>
            <li><a href="#"><img src="../img/contact_off.png" alt="0120-71-1010"></a></li>
          </ul>
          <ul class="menu">
            <li><a href="#"><img src="../img/menu_01_off.png" alt="ご利用ガイド"></a></li>
            <li><a href="#"><img src="../img/menu_02_on.png" alt="商品一覧"></a></li>
            <li><a href="#"><img src="../img/menu_03_off.png" alt="施工事例"></a></li>
            <li><a href="#"><img src="../img/menu_04_off.png" alt="よくある質問"></a></li>
            <li><a href="#"><img src="../img/menu_05_off.png" alt="特注品について"></a></li>
            <li><a href="#"><img src="../img/menu_06_off.png" alt="会社案内"></a></li>
          </ul>
        </nav>
      </header>
      <hr>
      <div class="content-wraper">
        <div class="content">
          <ul class="breadcrumb">
            <li><a href="#">ボールプールドットコムTOP</a></li>
            <li><a href="#">商品一覧</a></li>
            <li><a href="#"><?= $itemname ?></a></li>
          </ul>
          <div class="item-detail">
            <div class="item-photo">
              <img src="<?= $product_photo ?>" alt="<?= $itemname ?>商品画像">
            </div>
            <div class="item-info">
              <h2><?= $itemname ?></h2>
              <p>サイズ：<?= $size ?><br>値段：¥<?= number_format($dsp_price) ?>（税込）〜</p>
              <p>備考<br>※商品はボールミックスセットです。<br>お好きなカラーボール6色からお選びください</p>
              <p class="quote"><a href="#"><img src="../img/quote_btn.gif" alt="ご相談・お見積もり"></a></p>
            </div>
            <div class="strength"><a href="#"><img src="img/strength.jpg" alt="強み"></a></div>
            <div class="variation">
              <h3><img src="img/ttl_variation.png" alt="バリエーション"></h3>
              <ul class="variation-pict">
                <li><a href="#"><img src="img/variation_picture_01.jpg" alt="バリエーション1"></a></li>
                <li><a href="#"><img src="img/variation_picture_02.jpg" alt="バリエーション2"></a></li>
                <li><a href="#"><img src="img/variation_picture_03.jpg" alt="バリエーション3"></a></li>
                <li><a href="#"><img src="img/variation_picture_04.jpg" alt="バリエーション4"></a></li>
                <li><a href="#"><img src="img/variation_picture_05.jpg" alt="バリエーション5"></a></li>
                <li><a href="#"><img src="img/variation_picture_06.jpg" alt="バリエーション6"></a></li>
                <li><a href="#"><img src="img/variation_picture_07.jpg" alt="バリエーション7"></a></li>
              </ul>
            </div>
            <div class="drawing">
              <h3><img src="img/ttl_drawing.png" alt="商品図面・詳細"></h3>
              <div class="image"><img src="<?= $drawing_photo ?>"></div>
            </div>
            <div class="price">
              <h3><img src="img/ttl_price.png" alt="セット内訳・価格"></h3>
              <ul class="caption">
                <li>※この商品には連結金具は含まれておりません。お見積もり時にご指定ください。連結金具に関しては<a href="#">こちら</a></li>
                <li>※この商品にはボールは含まれておりません。お見積もり時にボール有無をご指定ください。カラーボールに関しては<a href="#">こちら</a></li>
                <li>※パーツのみをお求めの際は上記セット内訳の商品名・品番をお見積もりフォームに誤入力ください。</li>
              </ul>
              <div class="quote"><a href="#"><img src="../img/quote_btn.gif" alt="ご相談・お見積もり"></a></div>
            </div>
          </div>
          <div class="outer-content">
            <div class="color-select">
              <h3><img src="img/ttl_color.png" alt="セット内訳・価格"></h3>
              <p><a href="#"><img src="img/color_bnr.png" alt="ご相談・お見積もり"></a></p>
            </div>
            <div class="order">
              <h3><img src="img/ttl_order.png" alt="セット内訳・価格"></h3>
              <p><a href="#"><img src="img/order_bnr.gif" alt="誘導画像"></a></p>
            </div>
            <div class="back-list">
              <h3><img src="img/ttl_back_list.png" alt="商品一覧へ戻る"></h3>
              <ul class="list-back">
                <li><a href="#"><img src="img/list_back_01.png" alt="ミニボールプール"></a></li>
                <li><a href="#"><img src="img/list_back_02.png" alt="ボールプール（中型）"></a></li>
                <li><a href="#"><img src="img/list_back_03.png" alt="ボールプール（大型）"></a></li>
                <li><a href="#"><img src="img/list_back_04.png" alt="ボールプール関連商品"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="bnrs">
          <ul class="list-slider">
            <li><a href="#"><img src="img/bnr_01.png" alt="ミニボールプール"></a></li>
            <li><a href="#"><img src="img/bnr_02.png" alt="ボールプール（中型）"></a></li>
            <li><a href="#"><img src="img/bnr_03.png" alt="ボールプール（大型）"></a></li>
            <li><a href="#"><img src="img/bnr_04.png" alt="ボールプール関連商品"></a></li>
            <li><a href="#"><img src="img/bnr_05.png" alt="ボールプール関連商品"></a></li>
            <li><a href="#"><img src="img/bnr_06.png" alt="ボールプール関連商品"></a></li>
          </ul>
          <div class="quote"><a href="#"><img src="../img/quote_btn.gif" alt="ご相談・お見積もり"></a></div>
        </div>
      </div>
      <footer>
        <div class="footer-inner">
          <div class="footer-left">
            <address>〒578-0984　大阪府　東大阪市菱江2-14-16</address>
            <h1><a href="#"><img src="../img/logo.png" alt="ボールプール.com"></a></h1>
            <address>株式会社ワークス<br>ボールプール|ボールプール用ボール専門店【店舗家具 Wism】</address>
          </div>
          <div class="footer-right">
            <ul class="footer-menu">
              <li><a href="#">ご利用ガイド</a></li>
              <li><a href="#">商品一覧</a></li>
              <li><a href="#">施工事例</a></li>
            </ul>
            <ul class="footer-menu">
              <li><a href="#">特注品</a></li>
              <li><a href="#">会社案内</a></li>
              <li><a href="#">よくある質問</a></li>
            </ul>
            <ul class="footer-menu">
              <li><a href="#">カラーチャート</a></li>
              <li><a href="#">運営サイトのご案内</a></li>
              <li><a href="#">プライバシーポリシー</a></li>
            </ul>
            <ul class="footer-menu">
              <li><a href="#">お問い合わせ</a></li>
              <li><a href="#">スタッフ紹介</a></li>
              <li></li>
            </ul>
            <ul class="footer-contact">
              <li><a href="#"><img src="../img/tel_off.png" alt="0120-71-1010"></a></li>
              <li><a href="#"><img src="../img/contact_off.png" alt="0120-71-1010"></a></li>
            </ul>
          </div>
        </div>
        <div class="copy">Copyright &copy; Ball pool.com. All Right Reserved.</div>
      </footer>
    </div>
  <script type="text/javascript" src="./js/script.js"></script></body>
  <!-- javascript-->
</html>