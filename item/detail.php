<?php
$url = 'https://mat-room.com/api/itemcode/bpsa/prices/';
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json, true);

$itemname = $arr['itemname'];
$product_photo = $arr['photos'][0];
$drawing_photo = $arr['photos'][1];
$size = $arr['size_string'];

$price_list = $arr['listprice_array'];
$dsp_price = $arr['listprice_array']['A'];
$parts_array = $arr['parts_array'];
$count = count($price_list);

?>

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
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header>
        <div id="logo"><a href="#"><img src="/img/logo.png" alt="ボールプール.com"></a></div>
        <nav>
            <ul>
                <li><a href="#"><img src="/img/tel_off.png" alt="0120-71-1010"></a></li>
                <li><a href="#"><img src="/img/contact_off.png" alt="0120-71-1010"></a></li>
            </ul>
            <ul class="menu">
                <li><a href="#"><img src="/img/menu_01_off.png" alt="ご利用ガイド"></a></li>
                <li><a href="#"><img src="/img/menu_02_on.png" alt="商品一覧"></a></li>
                <li><a href="#"><img src="/img/menu_03_off.png" alt="施工事例"></a></li>
                <li><a href="#"><img src="/img/menu_04_off.png" alt="よくある質問"></a></li>
                <li><a href="#"><img src="/img/menu_05_off.png" alt="特注品について"></a></li>
                <li><a href="#"><img src="/img/menu_06_off.png" alt="会社案内"></a></li>
            </ul>
        </nav>
        <br class="clear_noie">
    </header>
    <hr>
    <div id="main" class="content-wrapper">
        <div class="content">
            <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                  href="#">ボールプールドットコムTOP</a>
                    <meta itemprop="position" content="1"/>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                  href="#">商品一覧</a>
                    <meta itemprop="position" content="2"/>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><strong><a
                                itemprop="item" href="#"><?= $itemname ?></a></strong>
                    <meta itemprop="position" content="3"/>
                </li>
            </ul>
            <main>
                <div class="item-detail">
                    <div class="item-wrap">
                        <div class="item-photo">
                            <img src="<?= $product_photo ?>" alt="<?= $itemname ?>商品画像">
                        </div>
                        <div class="item-info">
                            <h1 class="head03"><?= $itemname ?></h1>
                            <p>サイズ：<?= $size ?><br>値段：¥<?= number_format($dsp_price) ?>（税込）〜</p>
                            <p class="note">備考<br>※商品はボールミックスセットです。<br>お好きなカラーボール6色からお選びください</p>
                            <p class="btn01"><a href="#">ご相談・お見積もり</a></p>
                        </div>
                    </div>
                    <div class="strength"><img src="img/strength.jpg" alt="強み"></div>
                    <div class="variation">
                        <h3 class="head02"><span>バリエーション</span></h3>
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
                        <h3 class="head02"><span>商品図面・詳細</span></h3>
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?= $drawing_photo ?>">
                            </div>
                            <div class="image">
                                <img src="./img/howtouse_01.jpg" alt="各部の説明と取付け">
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <h3 class="head02"><span>セット内訳・価格</span></h3>
                        <div class="table">
                            <table>
                                <tr>
                                    <th nowrap>商品名</th>
                                    <th nowrap>品番</th>
                                    <th nowrap>サイズ (mm)</th>
                                    <th nowrap>数量</th>
                                    <th colspan="9">税込特価（円）</th>
                                </tr>
                                <tr>
                                    <td colspan="4"></td>
                                    <td class="bold">Aランク</td>
                                    <td class="bold">Bランク</td>
                                    <td class="bold">Cランク</td>
                                    <td class="bold">Dランク</td>
                                </tr>
                                <?php for ($i = 0; $i < 4; $i++) { ?>
                                    <tr>
                                        <td nowrap><?= $parts_array[$i]['itemname'] ?></td>
                                        <td><?= $parts_array[$i]['code'] ?></td>
                                        <td nowrap><?= $parts_array[$i]['size'] ?></td>
                                        <td><?= $parts_array[$i]['amount'] ?></td>
                                        <?php $j = 0; ?>
                                        <?php foreach ($parts_array[$i]['listprice_array'] as $key => $value) { ?>
                                            <?php
                                            if ($j >= 4) {
                                                break;
                                            }
                                            ?>
                                            <td>¥<?= number_format($value) ?></td>
                                       <?php $j++; } ?>
                                    </tr>
                                <?php } ?>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="bold">合計</td>
                                    <?php $k = 0; ?>
                                    <?php foreach ($price_list as $key => $value) { ?>
                                        <?php
                                        if ($k >= 4) {
                                            break;
                                        }
                                        ?>
                                        <td>¥<?= number_format($value) ?></td>
                                    <?php $k++; } ?>
                                </tr>
                            </table>
                        </div>
                        <ul class="caption">
                            <li>※この商品には連結金具は含まれておりません。お見積もり時にご指定ください。連結金具に関しては<a href="#">こちら</a></li>
                            <li>※この商品にはボールは含まれておりません。お見積もり時にボール有無をご指定ください。カラーボールに関しては<a href="#">こちら</a></li>
                            <li>※パーツのみをお求めの際は上記セット内訳の商品名・品番をお見積もりフォームにご入力ください。</li>
                        </ul>
                        <p class="btn01"><a href="#">ご相談・お見積もり</a></p>
                    </div>
                </div>
            </main>
            <div class="outer-content">
                <div class="color-select">
                    <h2 class="head01"><span>生地・カラーを選ぶ</span></h2>
                    <p><a href="#"><img src="img/color_bnr.png" alt="ご相談・お見積もり"></a></p>
                </div>
                <div class="order">
                    <h2 class="head01"><span>特注品のご案内</span></h2>
                    <p><a href="#"><img src="img/order_bnr.gif" alt="特注品のご案内誘導画像"></a></p>
                </div>
                <div class="back-list">
                    <h2 class="head01"><span>商品一覧へ戻る</span></h2>
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
                <li><a href="#"><img src="/img/bnr_01.png" alt="ミニボールプール"></a></li>
                <li><a href="#"><img src="/img/bnr_02.png" alt="ボールプール（中型）"></a></li>
                <li><a href="#"><img src="/img/bnr_03.png" alt="ボールプール（大型）"></a></li>
                <li><a href="#"><img src="/img/bnr_04.png" alt="ボールプール関連商品"></a></li>
                <li><a href="#"><img src="/img/bnr_05.png" alt="ボールプール関連商品"></a></li>
                <li><a href="#"><img src="/img/bnr_06.png" alt="ボールプール関連商品"></a></li>
            </ul>
            <p class="btn01"><a href="#">ご相談・お見積もり</a></p>
        </div>
    </div>
    <!--main-->

    <footer>
        <div class="footer-inner">
            <div class="footer-left">
                <h1><a href="#"><img src="/img/logo.png" alt="ボールプール.com"></a></h1>
                <address>〒578-0984　大阪府東大阪市菱江2-14-16<br>
                    株式会社ワークス<br>ボールプール|ボールプール用ボール専門店【店舗家具 Wism】
                </address>
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
                    <li><a href="#"><img src="/img/tel_off.png" alt="0120-71-1010"></a></li>
                    <li><a href="#"><img src="/img/contact_off.png" alt="0120-71-1010"></a></li>
                </ul>
            </div>
            <br class="clear_noie">
        </div>
        <div class="copy">Copyright &copy; Ball pool.com. All Right Reserved.</div>
    </footer>
</div>
<script type="text/javascript" src="/js/script.js"></script>
</body>
<!-- javascript-->
</html>
