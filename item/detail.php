<?php

//メタ情報をここで設定
$title = '';
$keyword = '';
$description = '';

$url = 'https://mat-room.com/api/itemcode/bpsa/prices/';
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json,true);

$itemname = $arr['itemname'];
$title = $itemname;

$product_photo = $arr['photos'][0];
$drawing_photo = $arr['photos'][1];

$product_code = $arr['code'];
$size = $arr['size_string'];

$price_list = $arr['listprice_array'];
$dsp_price = $arr['listprice_array']['A'];  //商品名の所に表示する金額
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
                            <?php if (is_url_exist($product_photo)) { ?>
                            <img src="<?= $product_photo ?>" alt="<?= $itemname ?>商品画像">
                            <?php }else{ ?>
                                画像は登録されていません
                            <?php } ?>
                        </div>
                        <div class="item-info">
                            <h1 class="head03"><?= $itemname ?></h1>
                            <p>サイズ：<?= $size ?><br>値段：¥<?= number_format($dsp_price) ?>（税込）〜</p>
                            <p class="note"><?php include './remarks/'.$product_code.'.php'; ?></p>
                            <p class="btn01"><a href="#">ご相談・お見積もり</a></p>
                        </div>
                    </div>
                    <div class="strength"><img src="img/strength.jpg" alt="強み"></div>
                    <div class="variation">
                        <h3 class="head02"><span>バリエーション</span></h3>
                        <?php include './variations/'.$product_code.'/index.php' ?>
                    </div>
                    <div class="drawing">
                        <h3 class="head02"><span>商品図面・詳細</span></h3>
                        <div class="image-wrap">
                            <div class="image">
                                <?php if (is_url_exist($drawing_photo)) { ?>
                                <img src="<?= $drawing_photo ?>">
                                <?php }else{ ?>
                                    画像は登録されていません
                                <?php } ?>
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
<<<<<<< HEAD
        <div class="bnrs">
            <ul class="list-slider">
                <li><a href="/item/bpm4000hu.php"><img src="../img/bnr_big_04.png" alt="円型ボールプール"></a></li>
                <li><a href="/item/bpbn.php"><img src="../img/bnr_mini_01.png" alt="ミニボールプール"></a></li>
                <li><a href="/item/bpsc.php"><img src="../img/bnr_basic_03.png" alt="ボールプールCセット"></a></li>
                <li><a href="/item/bpsd2c.php"><img src="../img/bnr_big_03.png" alt="滑り台2個・クライミングセット"></a></li>
                <li><a href="/item/bp2s.php"><img src="../img/bnr_mini_03.png" alt="2段ミニボールプールセット"></a></li>
                <li><a href="/item/bpsa.php"><img src="../img/bnr_basic_01.png" alt="ボールプールAセット"></a></li>
            </ul>
        </div>
    </div>
    <!--main-->

    <footer>
        <div class="footer-inner">
            <div class="footer-left">
                <h1><a href="#"><img src="../img/logo.png" alt="ボールプール.com"></a></h1>
                <address>〒578-0984　大阪府東大阪市菱江2-14-16<br>
                    株式会社ワークス<br>ボールプール|ボールプール用ボール専門店【店舗家具 Wism】</address>
            </div>
            <div class="footer-right">
                <ul class="footer-menu">
                    <li><a href="/guide/">ご利用ガイド</a></li>
                    <li><a href="/item/">商品一覧</a></li>
                    <li><a href="/case/">施工事例</a></li>
                </ul>
                <ul class="footer-menu">
                    <li><a href="/customer_order/">特注品</a></li>
                    <li><a href="/company/">会社案内</a></li>
                    <li><a href="/qa/">よくある質問</a></li>
                </ul>
                <ul class="footer-menu">
                    <li><a href="/color/">カラー・素材表</a></li>
                    <li><a href="/guidance/">運営サイトのご案内</a></li>
                    <li><a href="/privacy/">プライバシーポリシー</a></li>
                </ul>
                <ul class="footer-menu">
                    <li><a href="/contact/">お問い合わせ</a></li>
                    <li><a href="https://www.tenpokagushop.com/corp/recruit/staff.html" target="_blank">スタッフ紹介</a></li>
                    <li></li>
                </ul>
                <ul class="footer-contact">
                    <li><a href="#"><img src="../img/tel_off.png" alt="0120-71-1010"></a></li>
                    <li><a href="#"><img src="../img/contact_off.png" alt="0120-71-1010"></a></li>
                </ul>
            </div>
            <br class="clear_noie">
        </div>
        <div class="copy">Copyright &copy; Ball pool.com. All Right Reserved.</div>
    </footer>
=======
        <?php include '../template/bnrs.php'; ?>
    </div>
    <!--main-->
<?php include '../template/footer.php'; ?>
>>>>>>> origin/master
</div>
<script type="text/javascript" src="/js/script.js"></script>
<?php include '../template/analytics.php' ?>
</body>
<!-- javascript-->
</html>
<?php
/**
 * 外部ファイル存在チェック関数
 * @param $url
 * @return bool
 */
function is_url_exist($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if($code == 200){
        $status = true;
    }else{
        $status = false;
    }
    curl_close($ch);
    return $status;
}
