<?php

//メタ情報をここで設定
$title = '運営サイトのご案内';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="sites">
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
                <h1><img src="img/header.jpg" alt="運営サイトのご案内"/></h1>
                <div class="box">
                    <h1 class="head01"><span>運営サイトのご案内</span></h1>

                    <div class="site-group">
                        <h2>総合販売</h2>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><a href="//www.wism-chair.com/" target="_blank"><img src="img/sites_pict1.jpg"
                                                                                             alt="WISM"/></a></td>
                                    <td>WISM</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><a href="//www.tenpokagushop.com/wism/" target="_blank"><img
                                                src="img/sites_pict2.jpg" alt="店舗家具ショップ"/></a></td>
                                    <td>店舗家具ショップ</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="site-group">
                        <h2>ベンチソファ</h2>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><a href="https://www.benchsheet.com/" target="_blank"><img
                                                    src="img/sites_pict3.jpg" alt="ベンチシートプロショップ"/></a></td>
                                    <td>ベンチシートプロショップ</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><a href="//www.benchsheet.com" target="_blank"><img src="img/sites_pict4.jpg"
                                                                                            alt="ベンチシートドットコム"/></a></td>
                                    <td>ベンチシートドットコム</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><a href="//www.gyoumuyousofa.com" target="_blank"><img src="img/sites_pict5.jpg"
                                                                                               alt="ベンチシートドット来いドットコム"/></a>
                                    </td>
                                    <td>ベンチシート<br/>どっと来いドットコム</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><img src="img/sites_pict6.jpg" alt="ベンチナビ"/></td>
                                    <td>ベンチナビ</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="site-group">
                        <h2>キッズコーナー</h2>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><a href="//www.kodomoplayground.com"><img src="img/sites_pict7.jpg"
                                                                                  alt="キッズコーナー遊び場"/></a></td>
                                    <td>キッズコーナー遊び場</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><a href="//www.kodomoplayground.com"><img src="img/sites_pict8.jpg"
                                                                                  alt="子どもプレイグランド"/></a></td>
                                    <td>子どもプレイグランド</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><img src="img/sites_pict9.jpg" alt="子どもプレイグランド"/></td>
                                    <td>子どもプレイグランド</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="site-group">
                        <h2>業務用テーブル</h2>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><img src="img/sites_pict10.jpg" alt="テーブル店舗ドットコム"/></td>
                                    <td>テーブル店舗ドットコム</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><img src="img/sites_pict11.jpg" alt="テーブルナビ"/></td>
                                    <td>テーブルナビ</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="site-group">
                        <h2>椅子の張り替え・その他</h2>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><img src="img/sites_pict12.jpg" alt="椅子の張り替えドットコム"/></td>
                                    <td>椅子の張り替えドットコム</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><img src="img/sites_pict13.jpg" alt="張り替え太郎"/></td>
                                    <td>張り替え太郎</td>
                                </tr>
                            </table>
                        </div>
                        <div class="one-site">
                            <table>
                                <tr>
                                    <td><img src="img/sites_pict14.jpg" alt="椅子の張り地ドットコム"/></td>
                                    <td>椅子の張り地ドットコム</td>
                                </tr>
                            </table>
                        </div>
                    </div>
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
