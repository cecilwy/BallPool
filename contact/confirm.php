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
                    <p>ご入力内容を確認してください。</p>

                    <form method="POST" action="completion.php" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <th>お名前<span class="required">必須</span></th>
                                <td><input type="text" name="name" readonly="readonly" value="<?= $_POST['name']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>フリガナ</th>
                                <td><input type="text" name="furigana" readonly="readonly" value="<?= $_POST['furigana']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>会社名</th>
                                <td><input type="text" name="company_name" readonly="readonly" value="<?= $_POST['company_name']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>メールアドレス<span class="required">必須</span></th>
                                <td><input type="email" name="email" readonly="readonly" value="<?= $_POST['email']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>メールアドレス<span class="small">（確認）</span><span class="required">必須</span></th>
                                <td><input type="email" name="email_confirm" readonly="readonly" value="<?= $_POST['email_confirm']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>電話番号<span class="required">必須</span></th>
                                <td><input type="text" name="tel" readonly="readonly" value="<?= $_POST['tel']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>FAX番号</th>
                                <td><input type="text" name="fax" readonly="readonly" value="<?= $_POST['fax']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>郵便番号</th>
                                <td><input type="text" name="zip" readonly="readonly" value="<?= $_POST['zip']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>お届け先住所<span class="required">必須</span></th>
                                <td><input type="text" name="address" readonly="readonly" value="<?= $_POST['address']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>会社所在地<span class="small">（異なる場合のみ）</span></th>
                                <td><input type="text" name="company_address" readonly="readonly" value="<?= $_POST['company_address']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>ご希望の納期</th>
                                <td><input type="date" name="delivery_date" readonly="readonly" value="<?= $_POST['delivery_date']; ?>" /></td>
                            </tr>

                            <tr>
                                <th>お問い合わせ・ご要望<span class="required">必須</span></th>
                                <td><textarea name="body"><?= $_POST['body']; ?></textarea></td>
                            </tr>

                            <tr>
                                <th>添付ファイル1</th>
                                <td><?= $_FILES['file1']['name']; ?></td>
                            </tr>

                            <tr>
                                <th>添付ファイル2</th>
                                <td><?= $_FILES['file2']['name']; ?></td>
                            </tr>

                            <tr>
                                <th>添付ファイル3</th>
                                <td><?= $_FILES['file3']['name']; ?></td>
                            </tr>
                        </table>

                        <div class="form-btn">
                            <button class="btn-clear" type="reset" onclick="history.back()">再入力</button>
                            <button class="btn-submit" type="submit">ご入力内容の送信</button>
                        </div>

                    </form>

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



