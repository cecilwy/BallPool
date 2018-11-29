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
                    <p>商品に関することやカスタムオーダーのご依頼、納期のご相談などお気軽にお問い合わせください。<br />
                        以下のお見積りフォームに必要事項をご記入の上、ご送信ください。自動返信にて内容確認のメールをお送りいたします。<br /><br />

                        お急ぎの場合や、万が一メールが届かなかった場合は072-961-0081までお電話ください。(営業時間9:00～18:00)<br />
                        張地サンプルのご依頼・お見積り依頼の場合、張地の名称(プレザント：PL06など)をご記載ください。</p>

                    <table>
                        <tr>
                            <th>お名前</th>
                            <td><input type="text" name="name" /></td>
                        </tr>

                        <tr>
                            <th>フリガナ</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>会社名</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>メールアドレス</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>メールアドレス（確認）</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>電話番号</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>FAX番号</th>
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



