<?php

//メタ情報をここで設定
$title = 'よくある質問';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="qa">
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
                <div class="box">
                <h1 class="head01"><span>よくある質問</span></h1>
                <p class="intro">【ボールプール.COM】へようこそ！当サイトはボールプールに特化した専門サイトです。様々なサイズの既製品から、お客様のご要望に合わせた特注品まで、何でもご相談くださいませ。お客様からのお見積もりのご依頼を受けました後、自社工場にて、納期確認、在庫確認を行いまして、お見積書をFAX、またはメールにてお送りさせていただきます。<br><br>
                    【税込み特価】と表示されている商品は、全て3万円以上送料込み（一部地域を除く）実売価格になっております。お値引き対象外となりますので、ご了承くださいませ。<br><br>
                    お見積もりのご依頼はホームページのお問い合わせ、又はFAXにてお願いします。商品は自社工場より運送便での直送になります。<br>
                    お見積もりを提出するまでの時間は、工場直売だから自社工場に確認するだけなので、数十分程度とスピーディです。<br><br>
                    ご利用にあたり、よくいただくご質問とその回答をご覧いただけます。</p>
                </div>
                <div class="box">
                        <dl>
                        <dt><h2 class="question">ボールプールの設置を考えているのですが、どのくらいの費用が掛かりますか。</h2></dt>
                        <dd class="answer"><p>
                            いろいろな大きさ、タイプの既製品をご用意させていただいております。<br>
                            全て【税込み特価】で表記しておりますので、ご希望に近い商品をご参考になさってください。<br>また、お客様のお費用に沿ったプランも考えてさせていただきますので、サイズ・ご予算などお問合せの際にお伝えいただければ幸いです。</p>
                        </dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">見積りは有料ですか。</h2></dt>
                        <dd class="answer">
                            <p>もちろん無料です。特注品などもお気軽にお申し付けください。<br>メール、電話にて丁寧に対応させていただきます。</p></dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">なぜ、こんなに安いのですか。安いのは品質が悪いからですか。</h2></dt>
                        <dd class="answer"><p>
                                自社で製造・販売を行っているからです。また、販売・工場ともコストを安く抑えられるように努力をしております。<br>
                                材料なども安全性にこだわり、ウレタンも一流品（ブリジストン、アキレスなど）国産品ですし、木材に関しましてもJIS規格、合格品・スター付のものを使用しております。<br>
                                表素材（ビニールレザー）なども<a href="https://www.sangetsu.co.jp/showroom/" target="_blank">サンゲツ</a>や<a href="https://www.sincol-group.jp/showroom/" target="_blank">シンコー</a>など大手張地メーカーのものを使用しておりますので、安心してご利用ください。</p></dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">インターネットで注文するのが不安なのですが、大丈夫ですか。</h2></dt>
                        <dd class="answer"><p>
                                弊社は業務用家具業界では創立20年、ネット販売事業を始めてから10年ほどで、現在23サイトの運営を行っております。<br>
                                その経験があるから電話対応や商品についての説明も、親切丁寧に行うことが大切だと理解しております。<br>家具のエキスパートだからクオリティーにも自信があり、多くの実績がございます。<br><br>
                                <a href="/case/">納入事例</a>を見ていただければ安心していただけるかと存じますので、ぜひご覧ください。<br><br>
                                また、弊社にご来社いただければ、実際の製作現場もご覧いただくことも可能です。<br>（事前予約が必要となりますので、ご連絡くださいませ。）</p></dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">表素材のサンプルを見ることはできますか。</h2></dt>
                        <dd class="answer"><p>
                                メーカーよりB5サイズのカットサンプルをお送りさせていただきます。<br>
                                ご希望の張地の品番をメールまたはFAXにてご連絡ください。<br><br>
                                また、多くの張地をご覧になりたい場合は、弊社へお越しいただくか、全国にございますサンゲツやシンコールのショールームでご覧いただくことが可能です。</p></dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">表素材のランクの違いはどう違うのですか。</h2></dt>
                        <dd class="answer"><p>
                                ランクの違いはメーカーの上代価格の違いに伴い、弊社でオリジナルでつけたものです。<br>
                                    Aランクだから安物というわけではなく、耐久性に大きな遜色はございません。機能や手触り、柄ものなどの違いです。</p>
                                <table>
                                    <tbody>
                                    <tr>
                                    <th>A ランク</th>
                                    <td>スタンダードな張地です。弊社では一番多く使用しております。</td>
                                    </tr>
                                    <tr>
                                    <th>B ランク</th>
                                    <td>お掃除のしやすい機能の付いた張地が多くございます。</td>
                                    </tr>
                                    <tr>
                                    <th>C ランク</th>
                                    <td>柄ものや防炎機能が付いた張地がございます。</td>
                                    </tr>
                                    <tr>
                                    <th>D ランク</th>
                                    <td>ターポリン（テント地）など耐久性の強い張地などございます。</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="note">各ランクの張地の色や詳細につきましては、<a href="/color/">こちらのページ</a>をご覧ください。</p>
                            </dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">ボールはどのくらい入れたらよいでしょうか。</h2></dt>
                        <dd class="answer"><p>
                            量は対象年齢によっても異なりますが、1㎡当たり深さ/15～17ｃｍほどで500個、20ｃｍほどで750個くらいとさせていただいております。（弊社の70ｍｍのボールサイズの場合）<br><br>
                            ボールプールのサイズ・ご希望の深さなどお教えいただきましたら、専門スタッフが計算させていただきますので、<br><br>
                            お気軽にお問い合わせください。</p>
                            <p class="btn01"><a href="#">詳しくはこちら</a></p>
                        </dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">ボールはどのくらいで入れ替えが必要ですか。</h2></dt>
                        <dd class="answer"><p>
                            ボールは消耗品です。ご使用いただいておりますと少しずつ減っていく施設さんが多いようです。<br>
                            ですので、定期的に補充されることをお勧めしております。点検の際に潰れてしまったボールなどはこまめに回収して<br>
                            いただければ大丈夫かと存じます。</p>
                        </dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">ボールの大きさ、カラーは選べますか。</h2></dt>
                        <dd class="answer"><p>
                            弊社が取り扱っておりますボールサイズは、「70ｍｍ」のみとなります。予めご了承くださいませ。<br><br>
                            カラーは9色、透明・白・青・赤・黄色・黄緑・オレンジ・ピンク・水色がございます。<br>
                            「単色」「ミックス」「ハーフ＆ハーフ」の3パターンの梱包形態をご用意しておりますので、お好きなように組み合わせていただきます。</p>
                        </dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">1個単位での購入は可能ですか。<h2></dt>
                        <dd class="answer"><p>
                                申し訳ございません。1ケース/500個単位での販売となります。予めご了承くださいませ。</p>
                        </dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">ボールのサンプルをが欲しいのですが。</h2></dt>
                        <dd class="answer"><p>
                                全色サンプルをご用意させていただいております。お気軽にお申し付けください。</p>
                        </dd>
                        </dl>
                        <dl>
                        <dt><h2 class="question">透明・白だけで10万個ほしいのですが、納期はどのくらいでしょうか。</h2></dt>
                        <dd class="answer"><p>
                                2か月ほどお時間いただければ、ご対応可能です。<br>
                                タイの方でも多少在庫をもっており、またタイの工場とも密にやり取りを行っておりますので、お急ぎの場合は一度ご相談ください。</p>
                        </dd>
                        </dl>
                        <dl class="last">
                        <dt><h2 class="question">現場にぴったりのサイズで製作をしたいです。ご対応いただけますか。</h2></dt>
                        <dd class="answer"><p>
                                （但し、別途現地調査費・高速代・場所によっては宿泊代等が必要となります。予めご了承くださいませ。）<br>
                                専門スタッフに一度ご相談ください。</p>
                        </dd>
                        </dl>

                    <p class="blueNote">※その他不明点等ございましたら、何なりとお尋ねください。専門スタッフが丁寧に対応させていただきます。</p>
                </div>

        <?php include '../template/contactbox.php'; ?>
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