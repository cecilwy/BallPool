<?php

//メタ情報をここで設定
$title = '';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include './template/meta.php'; ?>
<body id="top">
<div class="wrapper">
    <?php include './template/header.php' ?>

    <div class="content-wrapper">
        <main>
        <h1><img src="img/top/mv.jpg" alt="ボールプールの特注・製作・販売の専門サイト"/></h1>
        <div class="content">


                <section id="about">
                    <h2 class="head01">ボールプールとは</h2>
                    <div>
                        <p>ボールプールは、サイドガードに囲まれた中にカラフルなボールプール用ボールが満たされたものです。小さな子供のための遊びや運動の場として使用されています。<br/><br/>
                            ボールプールはショッピングセンター、イベント会場、遊園地、アミューズメント施設、ファストフードレストラン、大小のゲームセンター、託児所などで設置されています。また小さなものはご家庭用としても使用できますし、ボールプール用のボールを入れなければキッズコーナーとしてもご利用できます。<br/><br/>
                            最近ではボールプールカフェなどの店舗も大人気です。安心感があるので、読書をしたり、睡眠をとったりされています。大人数人が入るのに十分な大きさがあります。</p>
                        <p class="photo"><img src="img/top/about-photo.png" alt=""/></p>
                    </div>
                </section>

                <div class="box">
                    <h2 class="head01">商品カテゴリ</h2>

                    <ul>
                        <li>
                            <img src="img/top/category-01.jpg" alt="ミニボールプール"/>
                            <p>省スペースのキッズコーナー向きの小さめボールプール。</p>
                        </li>
                        <li>
                            <img src="img/top/category-02.jpg" alt="ミニボールプール"/>
                            <p>中規模キッズコーナーの目玉アイテムにぴったりなサイズ感のボールプール。</p>
                        </li>

                        <li>
                            <img src="img/top/category-03.jpg" alt="ミニボールプール"/>
                            <p>大型のキッズコーナーに映える、子供たちに大人気のボールプール。</p>
                        </li>
                        <li>
                            <img src="img/top/category-04.jpg" alt="ミニボールプール"/>
                            <p>ボールプール用ボールやメンテナンス用品などを取り揃えています。</p>
                        </li>

                    </ul>

                </div>
            </main>


            <div class="outer-content">
                <div class="color-select">
                    <p><a href="#"><img src="/item//img/color_bnr.png" alt="ご相談・お見積もり"></a></p>
                </div>
                <div class="order">
                    <p><a href="#"><img src="/item/img/order_bnr.gif" alt="特注品のご案内誘導画像"></a></p>
                </div>


                <div class="box">
                    <h2 class="head01">ご利用ガイド</h2>

                    <ul>
                        <li>
                            <a href="#">
                                <img src="img/top/flow-01.gif" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/top/flow-02.gif" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/top/flow-03.gif" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/top/flow-04.gif" />
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        <?php include './template/bnrs.php'; ?>
        </div>

    </div>
    <!--main-->
    <?php include './template/footer.php'; ?>
</div>
<script type="text/javascript" src="/js/script.js"></script>
<?php include './template/analytics.php' ?>
</body>
<!-- javascript-->
</html>