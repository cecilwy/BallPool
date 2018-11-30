<?php
$title = "お問い合わせ";
?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="contact">
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
                <h1><img src="img/header.png" /></h1>
                <div class="box">
                    <h2 class="head01">お問い合わせ</h2>
                    <p>お問い合わせありがとうございます。<br />
                    送信が完了いたしました。</p>

                </div>

                <div class="box">
                    <h2 class="head01 adjust">電話・メールでのお問い合わせ</h2>
                    <p>ボールプールドットコムのご購入商品およびご利用方法につきましては下記、電話またはメールよりお問い合わせ下さい。<br />
                        尚、等お問い合わせ窓口はボールプールドットコムに関する専用窓口です。</p>

                    <div class="contact-btn-wrapper">
                        <div class="contact-btn">
                            <div class="contact-btn-inner">
                                <a href="tel:0120-71-1010"><img src="img/btn_tel.png" alt="電話（フリーダイヤル）でのお問い合わせ 0120-71-1010" /></a>
                                <p>※受付時間(月～日):09:00～18:00 夏期休業、年末年始はお休みさせていただきます。</p>
                            </div>
                        </div>
                        <div class="contact-btn">
                            <div class="contact-btn-inner">
                                <a href="#"><img src="img/btn_email.png" alt="メールでのお問い合わせ" /></a>
                                <p>※お問い合わせいただきました順にご対応をさせていただきますが、対応までお時間をいただく場合もございます。</p>
                            </div>
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



