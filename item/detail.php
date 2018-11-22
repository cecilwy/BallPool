<?php
$url = 'https://mat-room.com/api/itemcode/bpsa/prices/';
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json,true);

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
<?php include '../template/meta.php'; ?>
<body>
<div class="wrapper">
<?php include '../template/header.php' ?>
    <div class="content-wrapper">
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
<?php include '../template/footer.php'; ?>
</div>
<script type="text/javascript" src="../js/script.js"></script></body>
<!-- javascript-->
</html>