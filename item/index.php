<?php

//メタ情報をここで設定
$title = '商品一覧';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="items">
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
                <div class="back-list">
                    <h1 class="head01">商品一覧</h1>
                    <ul class="list-back">
                        <li><a href="#mini"><img src="/item/img/list_back_01.png" alt="ミニボールプール"></a></li>
                        <li><a href="#middle"><img src="/item/img/list_back_02.png" alt="ボールプール（中型）"></a></li>
                        <li><a href="#big"><img src="/item/img/list_back_03.png" alt="ボールプール（大型）"></a></li>
                        <li><a href="#other"><img src="/item/img/list_back_04.png" alt="ボールプール関連商品"></a></li>
                    </ul>
                </div>

                <div class="box">
                    <h2 class="head02" id="mini">ミニボールプール</h2>

                    <ul class="items">
                        <li>
                            <a href="/item/bpbn/"><img src="img/bnr_mini_01.jpg" alt="ミニ ボールプール"/></a>
                            <h3>ミニ ボールプール</h3>
                            <h4>W:1400 D:1400 H:350</h4>
                            <h5>￥90,290～</h5>
                        </li>
                        <li>
                            <a href="/item/bpkn/"><img src="img/bnr_mini_02.jpg" alt="ボールプール カメさんセット"/></a>
                            <h3>ボールプール カメさんセット</h3>
                            <h4>W:1400 D:1400 H:350</h4>
                            <h5>￥90,290～</h5>

                        </li>
                        <li>
                            <a href="/item/bp2s/"><img src="img/bnr_mini_03.jpg" alt="2段ボールプール"/></a>
                            <h3>2段ボールプール</h3>
                            <h4>W:1600 D:1600 H:400</h4>
                            <h5>￥121,250～</h5>
                        </li>
                    </ul>

                </div>

                <div class="box">
                    <h2 class="head02" id="middle">ベーシックボールプール</h2>
                    <ul class="items">
                        <li>
                            <a href="/item/bpsa"><img src="img/bnr_basic_01.jpg" alt="ボールプールAセット"/></a>
                            <h3>ボールプールAセット</h3>
                            <h4>W:2700 D:1800 H:450</h4>
                            <h5>￥267,850～</h5>
                        </li>
                        <li>
                            <a href="/item/bpsb"><img src="img/bnr_basic_02.jpg" alt="ボールプールBセット"/></a>
                            <h3>ボールプールBセット</h3>
                            <h4>W:1800 D:1800 H:450</h4>
                            <h5>￥267,850～</h5>

                        </li>
                        <li>
                            <a href="/item/bpsc"><img src="img/bnr_basic_03.jpg" alt="ボールプールCセット"/></a>
                            <h3>ボールプールCセット</h3>
                            <h4>W:2200 D:2200 H:450</h4>
                            <h5>￥239,900～</h5>
                        </li>
                    </ul>
                </div>

                <div class="box">
                    <h2 class="head02" id="big">大型ボールプール</h2>
                    <ul class="items">
                        <li>
                            <a href="/item/bpsd2/"><img src="img/bnr_big_01.jpg" alt="滑り台2個セット"/></a>
                            <h3>滑り台2個セット</h3>
                            <h4>W:4000 D:2000 H:800</h4>
                            <h5>￥445,720～</h5>
                        </li>
                        <li>
                            <a href="/item/bpsdc/"><img src="img/bnr_big_02.jpg" alt="滑り台・クライミングセット"/></a>
                            <h3>滑り台・クライミングセット</h3>
                            <h4>W:4000 D:2000 H:800</h4>
                            <h5>￥450,780～</h5>

                        </li>
                        <li>
                            <a href="/item/bpsd2c/"><img src="img/bnr_big_03.jpg" alt="滑り台2個・クライミングセット"/></a>
                            <h3>滑り台2個・クライミングセット</h3>
                            <h4>W:4000 D:2000 H:800</h4>
                            <h5>￥616,860～</h5>
                        </li>
                        <li>
                            <a href="/item/bpm4000hu/"><img src="img/bnr_big_04.jpg" alt="円型ボールプール"/></a>
                            <h3>円型ボールプール</h3>
                            <h4>W:4000 D:4000 H:600</h4>
                            <h5>￥610,980～</h5>

                        </li>
                        <li>
                            <a href="/item/bpmh4000hu/"><img src="img/bnr_big_05.jpg" alt="半円ボールプール"/></a>
                            <h3>半円ボールプール</h3>
                            <h4>W:4000 D:2000 H:600</h4>
                            <h5>￥305,720～</h5>
                        </li>
                    </ul>
                </div>

                <div class="box">
                    <h2 class="head02" id="other">ボールプール関連商品</h2>
                    <ul class="items items_three">
                        <li>
                            <a href="/item/ball11/"><img src="img/bnr_others_01.png" alt="ボールプールAセット"/></a>
                            <h3>カラーボール単色</h3>
                            <h5>￥11,930～</h5>
                        </li>
                        <li>
                            <a href="/item/ball20/"><img src="img/bnr_others_02.png" alt="ボールプールBセット"/></a>
                            <h3>カラーボールミックス</h3>
                            <h5>￥11,930～</h5>

                        </li>
                        <li>
                            <a href="/item/bpks/"><img src="img/bnr_others_03.png" alt="カメさんセット"/></a>
                            <h3>カメさんセット</h3>
                            <h5>￥616,860～</h5>
                        </li>
                        <li>
                            <a href="/item/bpy-1/"><img src="img/bnr_others_04.png" alt="ボールプールBセット"/></a>
                            <h3>四角遊具</h3>
                            <h5>￥610,980～</h5>

                        </li>
                        <li>
                            <a href="/item/bpy-2/"><img src="img/bnr_others_05.png" alt="三角遊具"/></a>
                            <h3>三角遊具</h3>
                            <h5>￥305,720～</h5>
                        </li>


                        <li>
                            <a href="/item/bpy-3/"><img src="img/bnr_others_06.png" alt="丸型遊具"/></a>
                            <h3>丸型遊具</h3>
                            <h5>￥305,720～</h5>
                        </li>
                        <li>
                            <a href="/item/bpy-4/"><img src="img/bnr_others_07.png" alt="ひょうたん型遊具"/></a>
                            <h3>ひょうたん型遊具</h3>
                            <h5>￥305,720～</h5>
                        </li>
                        <li>
                            <a href="/item/as1/"><img src="img/bnr_others_09.png" alt="入り口マット"/></a>
                            <h3>入口マット</h3>
                            <h5>￥305,720～</h5>
                        </li>
                        <li>
                            <a href="/item/mrc1/"><img src="img/bnr_others_10.png" alt="魔りょくりーん"/></a>
                            <h3>魔りょくりーん</h3>
                            <h5>￥305,720～</h5>
                        </li>
                        <li>
                            <a href="/item/rkg1/"><img src="img/bnr_others_11.png" alt="半円ボールプール"/></a>
                            <h3>半円ボールプール</h3>
                            <h5>￥305,720～</h5>
                        </li>
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