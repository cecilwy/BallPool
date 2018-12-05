<?php

//メタ情報をここで設定
$title = 'プライバシーポリシー';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="privacy">
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
                <div id="box">
                    <div class="box">
                        <h1 class="head01"><span>プライバシーポリシー</span></h1>

                        <p>株式会社ワークス（以下、当店）では、お客様のプライバシーを尊重し、お客様の個人情報を大切に保護することを重要な責務と考えております。当ウェブサイトでは、個人情報保護に関する法令を遵守するとともに、個人情報の取扱に関して次のような姿勢で行動しています。</p>

                        <dl>
                            <dt><h2>個人情報の定義</h2></dt>
                            <dd>「個人情報」とは、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日その他の記述等により特定の個人を識別する
                                ことができるもの、及び他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるものをいいます。</dd>

                            <dt><h2>個人情報の利用目的</h2></dt>
                            <dd>お客様から個人情報をご提供頂く場合、その情報はお客様からのお問い合わせ及びご要望に対して回答または対応する目的、または個人<br />
                                情報を頂く際に予め明示する目的のみに利用致します。お客様の個人情報をこれらの正当な目的以外に無断で利用することはありません。</dd>

                            <dt><h2>第三者への提供</h2></dt>
                            <dd>お客様からのご提供頂いた個人情報は、お客様のご了承がない限り、収集した個人情報を第三者に提供致しません。当店以外の企業／団体から皆様に有益と思われる情報のお届けを代行する場合にも、お客様のご承諾がない限り、個人情報はそうした企業／団体には開示･提供は致しません。ただし、以下の場合は除きます。<br /><br />

                                利用目的に必要な限りにおいて、当店または当店の業務委託先（販売加盟店や運送会社等）に対し開示を行う場合<br />
                                個人情報をご提供頂く際に予め明示した第三者に提供する場合<br />
                                法令に基づく場合その他個人情報保護法により第三者への提供が認められている場合</dd>

                            <dt><h2>個人情報の開示・訂正・削除について</h2></dt>
                            <dd>当店は、皆様の個人情報をできるだけ正確かつ最新の内容を管理します。お客様がご提供された個人情報の開示・訂正・削除を希望される場合、合理的な範囲で速やかに対応致します。その場合は、ご連絡ください。</dd>

                            <dt><h2>個人情報の管理（安全管理措置）</h2></dt>
                            <dd>お客様よりお預かりした個人情報の安全管理はサービス提供会社によって合理的、組織的、物理的、人的、技術的施策を講じるとともに、当ウェブサイトでは関連法令に準じた適切な取扱いを行うことで個人データへの不正な侵入、個人情報の紛失、改ざん、漏えい等の危険防止に努めます。</dd>

                            <dt><h2>保証および責任制限</h2></dt>
                            <dd>当ウェブサイトの利用は、お客様の責任において行われるものとします。当ウェブサイト及び当ウェブサイトにリンクが設定されている、他のウェブサイトから取得された各種情報の利用によって生じたあらゆる損害に関して、当社は一切の責任を負いません。</dd>

                            <dt><h2>お問い合わせ先</h2></dt>
                            <dd>
                                <table>
                                    <tr>
                                        <th>サイト名</th>
                                        <td>ball-pool.com（運営会社:株式会社ワークス）</td>
                                    </tr>
                                    <tr>
                                        <th>所在地</th>
                                        <td>〒578-0984　大阪府東大阪市菱江2-14-16</td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td>072-961-0081（代表）<br />
                                            (営業時間: 年365日 09：00～18：00)</td>
                                    </tr>
                                    <tr>
                                        <th>FAX番号</th>
                                        <td>072-962-8484</td>
                                    </tr>
                                    <tr>
                                        <th>メール</th>
                                        <td>問い合わせフォームより（<a href="/contact/">お問い合わせフォーム</a>）</td>
                                    </tr>
                                    <tr>
                                        <th>販売責任者</th>
                                        <td>谷口　満</td>
                                    </tr>
                                </table>
                            </dd>


                            <dt><h2>プライバシーポリシーの変更</h2></dt>
                            <dd>当ウェブサイトでは、収集する個人情報の変更、利用目的の変更、またはその他プライバシーポリシーの変更を行う際は、当ページへの変更をもって公表とさせていただきます。</dd>

                        </dl>


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