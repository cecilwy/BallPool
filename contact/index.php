<?php
ini_set('display_errors','1');
$subject = "タイトル";

$file_path = "../img/bnr_01.png";
//ファイル名
$file = "test.png";

$body = "--__BOUNDARY__\n";
$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
$body .= 'メール本文' . "\n";
$body .= "--__BOUNDARY__\n";

//添付ファイル設定
$body .= "Content-Type: application/octet-stream; name=\"{$file}\"\n";
$body .= "Content-Disposition: attachment; filename=\"{$file}\"\n";
$body .= "Content-Transfer-Encoding: base64\n";
$body .= "\n";
$body .= chunk_split(base64_encode(file_get_contents($file_path)));
$body .= "--__BOUNDARY__\n";

$title = "お問い合わせ";

mb_language("Ja") ;
mb_internal_encoding("UTF-8");

$header = "MIME-Version: 1.0\n";
$header .= "Content-Transfer-Encoding: 7bit\n";
$header .= "Content-Type: text/plain; charset=ISO-2022-JP\n";
$header .= "Message-Id: <" . md5(uniqid(microtime())) . "@overwrite.jp>\n";
$header .= "from: sakoda@overwrite.jp\n";
$header .= "Reply-To: sakoda@overwrite.jp\n";
$header .= "Return-Path:sakoda@overwrite.jp\n";
$header .= "X-Mailer: PHP/". phpversion();

mb_send_mail("sakoda@overwrite.jp", $subject, $body, $header, "-f sakoda@overwrite.jp");

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



