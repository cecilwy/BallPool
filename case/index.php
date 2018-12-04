<?php

//メタ情報をここで設定
$title = '施工事例';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="case">
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
                    <h1 class="head01">施工事例</h1>

                    <ul>
                        <li>
                           <img src="img/img-01.jpg" alt="">
                        </li>
                        <li>
                            <h2>カーディーラーの納入・設置事例</h2>
                            <p>(大阪府)</p>
                            <p>ダミーテキストです。和歌山県のカーディーラー様へキッズコーナーの納品、設置を行いました。<br /><br />
                                壁側中央にあるカエルのお絵かきボードが目を引き、マットの中心にはミニ滑り台など<br />
                                とても子供心をくすぐるキッズコーナーとなっております。</p>

                        </li>
                        <li>
                            <h2>美容院の納入・設置事例</h2>
                            <p>(奈良県)</p>
                            <p>ダミーテキストです。和歌山県のカーディーラー様へキッズコーナーの納品、設置を行いました。<br /><br />

                                壁側中央にあるカエルのお絵かきボードが目を引き、マットの中心にはミニ滑り台など<br />
                                とても子供心をくすぐるキッズコーナーとなっております。</p>
                        </li>
                        <li>
                            <img src="img/img-02.jpg" alt="" />
                        </li>
                        <li>
                            <img src="img/img-03.jpg" alt="" />
                        </li>
                        <li>
                            <h2>公共施設様の納入・設置事例</h2>
                            <p>(大阪府)</p>
                            <p>ダミーテキストです。和歌山県のカーディーラー様へキッズコーナーの納品、設置を行いました。<br /><br />

                                壁側中央にあるカエルのお絵かきボードが目を引き、マットの中心にはミニ滑り台など<br />
                                とても子供心をくすぐるキッズコーナーとなっております。</p>
                        </li>
                        <li>
                            <img src="img/img-04.jpg" alt="" />
                        </li>
                        <li>
                            <h2>商業施設様の納入・設置事例</h2>
                            <p>(兵庫県)</p>
                            <p>ダミーテキストです。和歌山県のカーディーラー様へキッズコーナーの納品、設置を行いました。<br /><br />

                                壁側中央にあるカエルのお絵かきボードが目を引き、マットの中心にはミニ滑り台など<br />
                                とても子供心をくすぐるキッズコーナーとなっております。</p>
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