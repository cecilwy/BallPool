<?php

//メタ情報をここで設定
$title = 'カラーチャート';
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
                    <a itemprop="item" href="#">ボールプールドットコムTOP</a>
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
                    <p class="ttl">
                        「抗菌」「防炎」などの機能や素材別に、A～Dの4つの価格ランクから計140種類以上の豊富なカラーをお選び頂けます。<br/><br/>

                        お好きな色を選んでいただけます。各メーカーの張材サンプル帳から布、柄物などもご利用頂けます。<br/>
                        ※御注文の際は色、品番をご指定下さい。
                    </p>
                </div>

                <ul class="buttons">
                    <li>
                        <button>推奨張地</button>
                    </li>
                    <li>
                        <button>Aランク</button>
                    </li>
                    <li>
                        <button>Bランク</button>
                    </li>
                    <li>
                        <button>Cランク</button>
                    </li>
                    <li>
                        <button>Dランク</button>
                    </li>
                </ul>

                <div class="box">
                    <h2 class="head01">推奨張地</h2>
                    <h3>マシュマロポップ</h3>
                    <table>
                        <tr>
                            <td>メーカー：サンゲツ</td>
                            <td>お子様にも安心・安全のノンフタル酸ビニールレザー。</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Cランク</td>
                            <td rowspan="2"><img src="img/a_rank/function.gif" alt="機能"/></td>
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
                                    $product_name = explode(".",$file);
                                    echo '<li><a href="'.$target_dir.$file.'" class="modal-image" rel="gallery"><img src="'.$target_dir.$file.'" alt="'.$product_name[0].'" /></a><p>'.$product_name[0].'</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>
                </div>


                <div class="box">
                    <h2 class="head01">Aランク</h2>
                    <h3>プレサント</h3>
                    <table>
                        <tr>
                            <td>メーカー：大阪シンコー</td>
                            <td>キッズコーナー定番の合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Aランク</td>
                            <td rowspan="2"><img src="img/a_rank/function.gif" alt="機能"/></td>
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
                                    $product_name = explode(".",$file);
                                    echo '<li><a href="'.$target_dir.$file.'" class="modal-image" rel="gallery"><img src="'.$target_dir.$file.'" alt="'.$product_name[0].'" /></a><p>'.$product_name[0].'</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>


                    <h3>モデラートⅡ137</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>落ち着きのある色合いの合皮レザー。</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Aランク</td>
                            <td rowspan="2"><img src="img/a_rank/function.gif" alt="機能"/></td>
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
                                    $product_name = explode(".",$file);
                                    echo '<li><a href="'.$target_dir.$file.'" class="modal-image" rel="gallery"><img src="'.$target_dir.$file.'" alt="'.$product_name[0].'" /></a><p>'.$product_name[0].'</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>


                </div>


                <div class="box">
                    <h2 class="head01">Bランク</h2>
                    <h3>ニュートップ</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>光沢のある、クレヨンなどの落書きが落ちやすい合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Bランク</td>
                            <td rowspan="2"><img src="img/a_rank/function.gif" alt="機能"/></td>
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
                                    $product_name = explode(".",$file);
                                    echo '<li><a href="'.$target_dir.$file.'" class="modal-image" rel="gallery"><img src="'.$target_dir.$file.'" alt="'.$product_name[0].'" /></a><p>'.$product_name[0].'</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>

                </div>

                <div class="box">
                    <h2 class="head01">Cランク</h2>
                    <h3>ガードナー</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>完成品防炎認定を取得している合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Cランク</td>
                            <td rowspan="2"><img src="img/a_rank/function.gif" alt="機能"/></td>
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
                                    $product_name = explode(".",$file);
                                    echo '<li><a href="'.$target_dir.$file.'" class="modal-image" rel="gallery"><img src="'.$target_dir.$file.'" alt="'.$product_name[0].'" /></a><p>'.$product_name[0].'</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>

                    <h3>パーク</h3>
                    <table>
                        <tr>
                            <td>メーカー：シンコール</td>
                            <td>完成品防炎認定を取得している合皮レザー</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Cランク</td>
                            <td rowspan="2"><img src="img/a_rank/function.gif" alt="機能"/></td>
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
                                    $product_name = explode(".",$file);
                                    echo '<li><a href="'.$target_dir.$file.'" class="modal-image" rel="gallery"><img src="'.$target_dir.$file.'" alt="'.$product_name[0].'" /></a><p>'.$product_name[0].'</p></li>';

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
                            <td rowspan="2"><img src="img/a_rank/function.gif" alt="機能"/></td>
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
                                    $product_name = explode(".",$file);
                                    echo '<li><a href="'.$target_dir.$file.'" class="modal-image" rel="gallery"><img src="'.$target_dir.$file.'" alt="'.$product_name[0].'" /></a><p>'.$product_name[0].'</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>

                </div>


                <div class="box">
                    <h2 class="head01">Dランク</h2>
                    <h3>ターポリン</h3>
                    <table>
                        <tr>
                            <td>メーカー：テイジン</td>
                            <td>完成品防炎を取得しているテント地</td>
                        </tr>
                        <tr>
                            <td>張り生地ランク：Dランク</td>
                            <td rowspan="2"><img src="img/a_rank/function.gif" alt="機能"/></td>
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
                                    $product_name = explode(".",$file);
                                    echo '<li><a href="'.$target_dir.$file.'" class="modal-image" rel="gallery"><img src="'.$target_dir.$file.'" alt="'.$product_name[0].'" /></a><p>'.$product_name[0].'</p></li>';

                                }
                            }
                        }
                        ?>
                    </ul>
                </div>

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