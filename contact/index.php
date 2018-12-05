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
                    <a itemprop="item" href="/">ボールプールドットコムTOP</a>
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

                    <form method="POST" action="confirm.php" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <th>お名前<span class="required">必須</span></th>
                                <td><input type="text" name="name" required /></td>
                            </tr>

                            <tr>
                                <th>フリガナ</th>
                                <td><input type="text" name="furigana" /></td>
                            </tr>

                            <tr>
                                <th>会社名</th>
                                <td><input type="text" name="company_name" /></td>
                            </tr>

                            <tr>
                                <th>メールアドレス<span class="required">必須</span></th>
                                <td><input type="email" name="email" required /></td>
                            </tr>

                            <tr>
                                <th>メールアドレス<span class="small">（確認）</span><span class="required">必須</span></th>
                                <td><input type="email" name="email_confirm" required /></td>
                            </tr>

                            <tr>
                                <th>電話番号<span class="required">必須</span></th>
                                <td><input type="text" name="tel" required /></td>
                            </tr>

                            <tr>
                                <th>FAX番号</th>
                                <td><input type="text" name="fax" /></td>
                            </tr>

                            <tr>
                                <th>郵便番号</th>
                                <td><input type="text" name="zip" /></td>
                            </tr>

                            <tr>
                                <th>お届け先住所<span class="required">必須</span></th>
                                <td><input type="text" name="address" required /></td>
                            </tr>

                            <tr>
                                <th>会社所在地<span class="small">（異なる場合のみ）</span></th>
                                <td><input type="text" name="company_address" /></td>
                            </tr>

                            <tr>
                                <th>ご希望の納期</th>
                                <td><input type="date" name="delivery_date" /></td>
                            </tr>

                            <tr>
                                <th>お問い合わせ・ご要望<span class="required">必須</span></th>
                                <td><textarea name="body"required ></textarea></td>
                            </tr>

                            <tr>
                                <th>添付ファイル1</th>
                                <td>
                                    <label>
                                        <span type="button" class="btn-file">ファイルを選択</span>
                                        <input id="file1" type="file" name="file1" />
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <th>添付ファイル2</th>
                                <td>
                                    <label>
                                        <span type="button" class="btn-file">ファイルを選択</span>
                                        <input id="file2" type="file" name="file2" />
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <th>添付ファイル3</th>
                                <td>
                                    <label>
                                        <span type="button" class="btn-file">ファイルを選択</span>
                                        <input id="file3" type="file" name="file3" />
                                    </label>
                                </td>
                            </tr>
                        </table>

                        <div class="form-btn">
                            <button class="btn-clear" type="reset">クリア</button>
                            <button class="btn-submit" type="submit">ご入力内容の確認</button>
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
<script type="text/javascript">
    var file1 = document.getElementById('file1');
    var file2 = document.getElementById('file2');
    var file3 = document.getElementById('file3');
    file1.onchange = function()
    {
        var text = this.value.replace('C:\\fakepath\\', '');
        var text_node = document.createTextNode(text);
        this.parentNode.parentNode.appendChild(text_node);
    };
    file2.onchange = function()
    {
        var text = this.value.replace('C:\\fakepath\\', '');
        var text_node = document.createTextNode(text);
        this.parentNode.parentNode.appendChild(text_node);
    };
    file3.onchange = function()
    {
        var text = this.value.replace('C:\\fakepath\\', '');
        var text_node = document.createTextNode(text);
        this.parentNode.parentNode.appendChild(text_node);
    };
</script>
</body>
<!-- javascript-->
</html>



