<?php

//メタ情報をここで設定
$title = '会社案内';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="company">
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
                <h1><img src="img/header.png" alt="会社概要"/></h1>
                <div class="box">
                    <h2 class="head02"><span>会社概要</span></h2>

                    <div class="wide_photo">
                        <img src="img/company_pict.jpg" alt="会社写真"/>
                    </div>

                    <table>
                        <tr>
                            <th>社名</th>
                            <td>株式会社ワークス( <a href="#" target="_blank">ホームページ</a>)</td>
                        </tr>

                        <tr>
                            <th>所在地</th>
                            <td>【本社／本店・第一工場】<br>
                                〒578-0984　大阪府東大阪市菱江2-14-16<br>
                                【第二工場】<br>
                                〒578-0955　大阪府東大阪市横枕南1番24号
                            </td>
                        </tr>


                        <tr>
                            <th>資本金</th>
                            <td>1000万円</td>
                        </tr>


                        <tr>
                            <th>設立</th>
                            <td>平成10年1月</td>
                        </tr>

                        <tr>
                            <th>代表者</th>
                            <td>代表取締役社長　谷口　満</td>
                        </tr>

                        <tr>
                            <th>従業員数</th>
                            <td>15名（開発／商品開発部）</td>
                        </tr>

                        <tr>
                            <th>事業内容</th>
                            <td>キッズ玩具・キッズ用品・ソファー・椅子・テーブル・業務用家具の製造、販売）</td>
                        </tr>


                        <tr>
                            <th>取引銀行</th>
                            <td>三菱UFJ銀行　八戸ノ里支店</td>
                        </tr>

                        <tr>
                            <th>関連会社</th>
                            <td>有限会社プロダクトワークス<br/>
                                店舗家具株式会社<br/>
                                和泉フォーム株式会社(<a href="#" target="_blank">ホームページ</a>)
                            </td>
                        </tr>

                    </table>
                </div>

                <div class="box">
                    <h2 class="head02"><span>アクセス</span></h2>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.149549707498!2d135.60975041523156!3d34.676174880440804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001206e67c8e573%3A0x841a8a261b2eb96a!2z44CSNTc4LTA5ODQg5aSn6Ziq5bqc5p2x5aSn6Ziq5biC6I-x5rGf77yS5LiB55uu77yR77yU4oiS77yR77yW!5e0!3m2!1sja!2sjp!4v1543457800441"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>



                <div class="box">
                    <h2 class="head02"><span>沿革</span></h2>

                    <table>
                        <tr>
                            <th>平成10年1月</th>
                            <td>株式会社ワークス設立し創業開始 主に特注、別注家具の製作、籐製品の輸入卸販売を行う</td>
                        </tr>
                        <tr>
                            <th>平成11年4月</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>平成12年5月</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>平成15年5月</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>平成16年5月</th>
                            <td></td>
                        </tr>


                        <tr>
                            <th>平成16年5月</th>
                            <td></td>
                        </tr>


                        <tr>
                            <th>平成16年5月</th>
                            <td></td>
                        </tr>


                        <tr>
                            <th>平成16年5月</th>
                            <td></td>
                        </tr>


                        <tr>
                            <th>平成16年5月</th>
                            <td></td>
                        </tr>

                    </table>


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