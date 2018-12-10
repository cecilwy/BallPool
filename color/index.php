<?php

//メタ情報をここで設定
$title = 'カラー・素材表';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="color">
<div class="wrapper">
    <?php include '../template/header.php' ?>
    <div class="content-wrapper">
        <div class="content">
            <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="/">ボールプールドットコムTOP</a>
                    <meta itemprop="position" content="1"/>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <strong><a itemprop="item" href="#"><?= $title ?></a></strong>
                    <meta itemprop="position" content="3"/>
                </li>
            </ul>
            <main>
                <div class="box">
                    <h1 class="head01">カラー・素材表</h1>
                    <p class="ttl left">
                        「抗菌」「防炎」などの機能や素材別に、A～Dの4つの価格ランクから計140種類以上の豊富なカラーをお選び頂けます。<br/><br/>

                        お好きな色を選んでいただけます。各メーカーの張材サンプル帳から布、柄物などもご利用頂けます。<br/>
                        ※御注文の際は色、品番をご指定下さい。
                    </p>
                </div>

                <ul class="buttons">
                    <li>
                        <a href="#recommend">
                            <button>推奨張地</button>
                        </a>
                    </li>
                    <li>
                        <a href="#a-rank">
                            <button>Aランク</button>
                        </a>
                    </li>
                    <li>
                        <a href="#b-rank">
                            <button>Bランク</button>
                        </a>
                    </li>
                    <li>
                        <a href="#c-rank">
                            <button>Cランク</button>
                        </a>
                    </li>
                    <li>
                        <a href="#d-rank">
                            <button>Dランク</button>
                        </a>
                    </li>
                </ul>

                <div class="box">
                    <h2 class="head01" id="recommend">推奨張地</h2>
                    <h3>マシュマロポップ</h3>
                    <table>
                        <tr>
                            <td>メーカー：サンゲツ</td>
                            <td>お子様にも安心・安全のノンフタル酸ビニールレザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Cランク</td>
                            <td rowspan="2">
                                <ul class="icon_box">
                                    <li class="toolchip" data-tooltip="水や中性洗剤で汚れの落ちやすい商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_08.gif"
                                                                      alt="お手入れ楽々　簡単ケア"></li>
                                    <li class="toolchip" data-tooltip="抗菌加工で表面に付着した菌の繁殖を抑えられる商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_05.gif"
                                                                      alt="抗菌　菌の増殖を防ぐ"></li>
                                    <li class="toolchip" data-tooltip="アルコール系薬剤のメンテナンスに強い商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_06.gif"
                                                                      alt="耐アルコール　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="塩素系薬剤のメンテナンスに強い商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_04.gif"
                                                                      alt="漂白OK　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="防炎協会認定のJIS1091難燃テストに合格した商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_01.gif"
                                                                      alt="難燃　燃えにくい"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>全12色</td>
                        </tr>

                    </table>

                    <ul class="item">
                        <?php
                        $target_dir = 'img/a_rank/marshmallowpop/';
                        $fileList = array();
                        if (is_dir($target_dir) && $handle = opendir($target_dir)) {
                            while (($file = readdir($handle)) !== false) {
                                if (filetype($path = $target_dir . $file) == "file") {
                                    $product_name = explode(".", $file);
                                    echo '<li><a href="' . $target_dir . $file . '" class="modal-image" rel="gallery01"><img src="' . $target_dir . $file . '" alt="' . $product_name[0] . '" /></a><p>' . $product_name[0] . '</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>
                </div>


                <div class="box">
                    <h2 class="head01" id="a-rank">Aランク</h2>
                    <h3>プレサント</h3>
                    <table>
                        <tr>
                            <td>メーカー：大阪シンコー</td>
                            <td>キッズコーナー定番の合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Aランク</td>
                            <td rowspan="2">
                                <ul class="icon_box">
                                    <li class="toolchip" data-tooltip="水や中性洗剤で汚れの落ちやすい商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_08.gif"
                                                                      alt="お手入れ楽々　簡単ケア"></li>
                                    <li class="toolchip" data-tooltip="衣料や鞄の粗悪な染料の移行を防ぐ商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_12.gif"
                                                                      alt="耐移行　色移りしにくい"></li>
                                    <li class="toolchip" data-tooltip="防炎協会認定のJIS1091難燃テストに合格した商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_01.gif"
                                                                      alt="難燃　燃えにくい"></li>
                                </ul>

                            </td>
                        </tr>
                        <tr>
                            <td>全46色</td>
                        </tr>

                    </table>

                    <ul class="item">
                        <?php
                        $target_dir = 'img/a_rank/pleasant/';
                        $fileList = array();
                        if (is_dir($target_dir) && $handle = opendir($target_dir)) {
                            while (($file = readdir($handle)) !== false) {
                                if (filetype($path = $target_dir . $file) == "file") {
                                    $product_name = explode(".", $file);
                                    echo '<li><a href="' . $target_dir . $file . '" class="modal-image" rel="gallery02"><img src="' . $target_dir . $file . '" alt="' . $product_name[0] . '" /></a><p>' . $product_name[0] . '</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>


                    <h3>モデラートⅡ137</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>落ち着きのある色合いの合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Aランク</td>
                            <td rowspan="2">
                                <ul class="icon_box">
                                    <li class="toolchip" data-tooltip="汚れが付きにくく、落としやすい加工を施している商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_11.gif"
                                                                      alt="防汚　汚れにくい"></li>
                                    <li class="toolchip" data-tooltip="塩素系薬剤のメンテナンスに強い商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_04.gif"
                                                                      alt="漂白OK　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="抗菌加工で表面に付着した菌の繁殖を抑えられる商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_05.gif"
                                                                      alt="抗菌　菌の増殖を防ぐ"></li>
                                    <li class="toolchip" data-tooltip="アルコール系薬剤のメンテナンスに強い商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_06.gif"
                                                                      alt="耐アルコール　消毒可能"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>全34色</td>
                        </tr>

                    </table>

                    <ul class="item">
                        <?php
                        $target_dir = 'img/a_rank/moderate2/';
                        $fileList = array();
                        if (is_dir($target_dir) && $handle = opendir($target_dir)) {
                            while (($file = readdir($handle)) !== false) {
                                if (filetype($path = $target_dir . $file) == "file") {
                                    $product_name = explode(".", $file);
                                    echo '<li><a href="' . $target_dir . $file . '" class="modal-image" rel="gallery03"><img src="' . $target_dir . $file . '" alt="' . $product_name[0] . '" /></a><p>' . $product_name[0] . '</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>


                </div>


                <div class="box">
                    <h2 class="head01" id="b-rank">Bランク</h2>
                    <h3>ニュートップ</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>光沢のある、クレヨンなどの落書きが落ちやすい合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Bランク</td>
                            <td rowspan="2">
                                <ul class="icon_box">
                                    <li class="toolchip" data-tooltip="汚れが付きにくく、落としやすい加工を施している商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_11.gif"
                                                                      alt="防汚　汚れにくい"></li>
                                    <li class="toolchip" data-tooltip="表面でアルコールの影響が受けにくくなっている商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_13.gif"
                                                                      alt="準耐アルコール　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="塩素系薬剤のメンテナンスに強い商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_04.gif"
                                                                      alt="漂白OK　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="衣料や鞄の粗悪な染料の移行を防ぐ商品を示すマークです。"
                                        style="cursor: pointer;"><img src="./img/icons/cloth_icon_12.gif"
                                                                      alt="耐移行　色移りしにくい"></li>
                                    <li class="toolchip" data-tooltip="鉛・水銀・カドミウム・六価クロム・ポリ臭化ビフェニール、ポリ臭化ジフェニルエーテルを使用していない商品を示すマークです。"><img src="./img/icons/cloth_icon_10.gif" alt="6有害物質不使用　安心・安全"></li>
                                </ul>

                            </td>
                        </tr>
                        <tr>
                            <td>全25色</td>
                        </tr>

                    </table>

                    <ul class="item">
                        <?php
                        $target_dir = 'img/b_rank/newtop/';
                        $fileList = array();
                        if (is_dir($target_dir) && $handle = opendir($target_dir)) {
                            while (($file = readdir($handle)) !== false) {
                                if (filetype($path = $target_dir . $file) == "file") {
                                    $product_name = explode(".", $file);
                                    echo '<li><a href="' . $target_dir . $file . '" class="modal-image" rel="gallery04"><img src="' . $target_dir . $file . '" alt="' . $product_name[0] . '" /></a><p>' . $product_name[0] . '</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>

                </div>

                <div class="box">
                    <h2 class="head01" id="c-rank">Cランク</h2>
                    <h3>ガードナー</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>完成品防炎認定を取得している合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Cランク</td>
                            <td rowspan="2">
                                <ul class="icon_box">
                                    <li class="toolchip" data-tooltip="防炎試験に合格可能な商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_14.gif" alt="防炎　燃えにくい"></li>
                                    <li class="toolchip" data-tooltip="表面でアルコールの影響が受けにくくなっている商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_13.gif" alt="準耐アルコール　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="塩素系薬剤のメンテナンスに強い商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_04.gif" alt="漂白OK　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="鉛・水銀・カドミウム・六価クロム・ポリ臭化ビフェニール、ポリ臭化ジフェニルエーテルを使用していない商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_10.gif" alt="6有害物質不使用　安心・安全"></li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>全9色</td>
                        </tr>

                    </table>

                    <ul class="item">
                        <?php
                        $target_dir = 'img/c_rank/gardner/';
                        $fileList = array();
                        if (is_dir($target_dir) && $handle = opendir($target_dir)) {
                            while (($file = readdir($handle)) !== false) {
                                if (filetype($path = $target_dir . $file) == "file") {
                                    $product_name = explode(".", $file);
                                    echo '<li><a href="' . $target_dir . $file . '" class="modal-image" rel="gallery05"><img src="' . $target_dir . $file . '" alt="' . $product_name[0] . '" /></a><p>' . $product_name[0] . '</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>

                    <h3>パーク</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>小児科でも使用される動物柄入りの合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Cランク</td>
                            <td rowspan="2">
                                <ul class="icon_box">
                                    <li class="toolchip" data-tooltip="汚れが付きにくく、落としやすい加工を施している商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_11.gif" alt="防汚　汚れにくい"></li>
                                    <li class="toolchip" data-tooltip="表面でアルコールの影響が受けにくくなっている商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_13.gif" alt="準耐アルコール　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="塩素系薬剤のメンテナンスに強い商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_04.gif" alt="漂白OK　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="防炎協会認定のJIS1091難燃テストに合格した商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_01.gif" alt="難燃　燃えにくい"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>全9色</td>
                        </tr>

                    </table>

                    <ul class="item">
                        <?php
                        $target_dir = 'img/c_rank/park/';
                        $fileList = array();
                        if (is_dir($target_dir) && $handle = opendir($target_dir)) {
                            while (($file = readdir($handle)) !== false) {
                                if (filetype($path = $target_dir . $file) == "file") {
                                    $product_name = explode(".", $file);
                                    echo '<li><a href="' . $target_dir . $file . '" class="modal-image" rel="gallery06"><img src="' . $target_dir . $file . '" alt="' . $product_name[0] . '" /></a><p>' . $product_name[0] . '</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>


                    <h3>デコア</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>木目調の落ち着いた空間を演出してくれる合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Cランク</td>
                            <td rowspan="2">
                                <ul class="icon_box">
                                    <li class="toolchip" data-tooltip="鉛・水銀・カドミウム・六価クロム・ポリ臭化ビフェニール、ポリ臭化ジフェニルエーテルを使用していない商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_10.gif" alt="6有害物質不使用　安心・安全"></li>
                                    <li class="toolchip" data-tooltip="表面でアルコールの影響が受けにくくなっている商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_13.gif" alt="準耐アルコール　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="塩素系薬剤のメンテナンスに強い商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_04.gif" alt="漂白OK　消毒可能"></li>
                                    <li class="toolchip" data-tooltip="防炎協会認定のJIS1091難燃テストに合格した商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_01.gif" alt="難燃　燃えにくい"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>全7色</td>
                        </tr>

                    </table>

                    <ul class="item">
                        <?php
                        $target_dir = 'img/c_rank/gardner/';
                        $fileList = array();
                        if (is_dir($target_dir) && $handle = opendir($target_dir)) {
                            while (($file = readdir($handle)) !== false) {
                                if (filetype($path = $target_dir . $file) == "file") {
                                    $product_name = explode(".", $file);
                                    echo '<li><a href="' . $target_dir . $file . '" class="modal-image" rel="gallery07"><img src="' . $target_dir . $file . '" alt="' . $product_name[0] . '" /></a><p>' . $product_name[0] . '</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>

                </div>


                <div class="box">
                    <h2 class="head01" id="d-rank">Dランク</h2>
                    <h3>ターポリン</h3>
                    <table>
                        <tr>
                            <td>メーカー：テイジン</td>
                            <td>完成品防炎を取得しているテント地</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Dランク</td>
                            <td rowspan="2">
                                <ul class="icon_box">
                                    <li class="toolchip" data-tooltip="防炎協会認定のJIS1091難燃テストに合格した商品を示すマークです。" style="cursor: pointer;"><img src="./img/icons/cloth_icon_01.gif" alt="難燃　燃えにくい"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>全12色</td>
                        </tr>

                    </table>

                    <ul class="item">
                        <?php
                        $target_dir = 'img/d_rank/tarpaulin/';
                        $fileList = array();
                        if (is_dir($target_dir) && $handle = opendir($target_dir)) {
                            while (($file = readdir($handle)) !== false) {
                                if (filetype($path = $target_dir . $file) == "file") {
                                    $product_name = explode(".", $file);
                                    echo '<li><a href="' . $target_dir . $file . '" class="modal-image" rel="gallery08"><img src="' . $target_dir . $file . '" alt="' . $product_name[0] . '" /></a><p>' . $product_name[0] . '</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
                <?php include '../template/contactbox.php'; ?>
            </main>
        </div>
        <?php include '../template/bnrs.php'; ?>
    </div>
    <!--main-->
    <?php include '../template/footer.php'; ?>
</div>
<script type="text/javascript" src="/js/script.js"></script>
<?php include '../template/analytics.php' ?>
</body>
<!-- javascript-->
</html>
