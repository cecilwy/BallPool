<?php

//メタ情報をここで設定
$title = '商品一覧';
$keyword = '';
$description = '';

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
        <?php include '../template/bnrs.php'; ?>
    </div>
    <!--main-->
    <?php include '../template/footer.php'; ?>
</div>
<script type="text/javascript" src="/js/script.js"></script></body>
<!-- javascript-->
</html>