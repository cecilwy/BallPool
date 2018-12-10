<?php

//メタ情報をここで設定
$title = 'ご利用ガイド';
$keyword = '';
$description = '';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include '../template/meta.php'; ?>
<body id="guide">
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
    <h1 class="head01"><span>ご利用ガイド</span></h1>
    <p>ボールプールドットコムのホームページをご覧いただきましてありがとうございます。<br><br>
        当サイトは子供の遊び場・ボールプールセット・カラーボール専門サイトです。 飲食店、オフィス、病院、ホテル、商業施設など様々な空間でお使いいただける丈夫で良質なボールプールセット・カラーボールを製造・販売いたしております。<br><br>
        サイトにおいてご不明な点、ご質問がありましたら、お気軽にご連絡ください。</p>
</div>

<div class="box flow" id="flow-1">
    <h2 class="head01"><span>ご注文から納品までの流れ</span></h2>
    <div class="ulWrap">
    <ul class="steps">
        <li class="li01">
            <div class="liInr">
                <div class="info">
                    <h3>Webサイトよりお見積り依頼</h3>
                    <p>ご希望の商品をお選びいただき、<a href="//systemsofa.com/MailSystem/user/?reffere=coto-kito.com" target="_blank">お問い合わせフォーム</a>より張地（カラー）・その他必要事項をご記入いただき送信してください。</p>
                </div>
                <p class="img"><img src="/guide/img/img01.png" alt="Webサイトよりお見積り依頼"></p>
            </div>
        </li>
        <li class="li02">
            <div class="liInr">
                <div class="info">
                    <h3>お見積りのご送付</h3>
                    <p>お送りいただいたメールアドレスあてにお見積り書と納期（目安）のお知らせを送付いたします。</p>
                </div>
                <p class="img"><img src="/guide/img/img02.png" alt="お見積りのご送付"></p>
            </div>
        </li>
        <li class="li03">
            <div class="liInr">
                <div class="info">
                    <h3>ご注文・お支払い</h3>
                    <p>お見積り金額と納期目安をご確認の上、お見積り書(<a href="/guide/img/order.jpg" class="modal-image">サンプル</a>)の左下がご注文書となりますので、必要事項をご記入頂きメールまたはFAXでご返信下さい。合わせて、ご注文書記載の弊社指定口座までお見積り金額をご入金ください。</p>
                    <ul class="note">
                        <li>※ご注文の際に個人名でのご記入の場合、追加送料がかかる場合がございます。個人名義での法人様・店舗様のご注文につきまして事前にお知らせください。</li>
                        <li>※商品代金は前払い・銀行振込のみとさせていただいておりますのでご了承ください。<br>
                        （お振込手数料はお客様負担でお願いいたします。）</li>
                    </ul>
                </div>
                <p class="img right"><a href="/guide/img/order.jpg" class="modal-image"><img src="/guide/img/img03.png" alt="ご注文・お支払い"></a></p>
            </div>
        </li>
        <li class="li04">
            <div class="liInr">
                <div class="info">
                    <h3>ご入金確認・納期確定のご案内</h3>
                    <p>ご注文書のご送付・ご入金をもってご注文完了となり、その後に納期確定のご連絡となります。</p>
                </div>
                <p class="img"><img src="/guide/img/img04.png" alt="ご入金確認・納期確定のご案内"></p>
            </div>
        </li>
        <li class="li05">
            <div class="liInr">
                <div class="info">
                    <h3>商品製作～配送・納品のご連絡</h3>
                    <p>弊社スタッフが一つ一つの製品を丁寧に製作いたします。<br>
                        制作完了・出荷時には製作完了の旨と出荷・配送目安のご連絡をいたします。</p>
                </div>
                <p class="img"><img src="/guide/img/img05.png" alt="商品製作～配送・納品のご連絡"></p>
            </div>
        </li>
        <li class="li06">
            <div class="liInr">
                <div class="info">
                    <h3>お届け</h3>
                </div>
                <p class="img"><img src="/guide/img/img06.png" alt="お届け"></p>
            </div>
        </li>
    </ul>
    </div>
    <div class="cancel">
    <h3>受注後のキャンセルについて</h3>
    <p>全ての商品が受注生産となっておりますので、ご注文完了後の変更及びキャンセル・ご返金は致しかねます。ご注文前に十分にご確認下さいますようお願い申し上げます。</p>
    </div>
</div>

<div class="box" id="flow-2">
    <h2 class="head01"><span>配送について</span></h2>
    <p>ご注文いただきました商品は、全て当社指定運送会社より発送いたします。配送地域によって異なりますが、ご注文後、通常約2週間でのお届けとなります。都合によりご用意にお時間がかかる場合は、別途ご連絡致します。</p>
    <ul class="note mb40">
        <li>※交通状況や天候、地域により若干のお時間をいただくことがございます。あらかじめご了承下さい。</li>
        <li>※大型連休・お盆・年末年始にかけては、上記お届け目安日数以上お時間が必要となります。</li>
        <li>※1階軒先渡しとなっております。上層階のお引渡しは、別途搬入費が必要となる場合があります。</li>
    </ul>

    <h3>配送日時指定</h3>
    <p>午前、午後のみのご指定となります。<br>
        時間指定は別途お見積りとなります。</p>
    <ul class="note mb40">
        <li>※離島など、一部の地域において時間指定サービスをお受けできない場合、<br>指定日時のご希望に添えない場合がございます。 あらかじめご了承ください。</li>
    </ul>

    <h3>配送先</h3>
    <p>配送先は日本国内のみとさせていただきます。<br>
        海外からのご注文及び、海外への配送業務は行ってりません。予めご了承下さい。
    </p>
</div>

<div class="box" id="flow-3">
    <h2 class="head01"><span>お支払いについて</span></h2>
    <p class="size20">お買い上げ3万円以内：￥1,620-<br>お買い上げ3万円以上：送料無料</p>
    <ul class="note mb40">
        <li>※北海道、沖縄、離島は送料無料対象外となります。</li>
        <li>※商業施設内への搬入、東京現場送りには送料以外の搬入費がかかることがあります。</li>
        <li>※弊社までお越しいただき、お引き取りの場合はビニール簡易包装のみでのお渡しも可能です。</li>
    </ul>

    <h3>ご注意</h3>
    <p>当店は法人様専用となります。個人様宅への配送の場合は対象外となります。<br>
        送料無料は「１ヶ所へ発送する際の配送料」のみ適用されます。2ヵ所目以上の配送には別途弊社規定の送料が発生します。</p>
</div>

<div class="box return" id="flow-4">
    <h2 class="head01"><span>返品交換について</span></h2>
    <p class="mb30">商品を開封された際に、部品に不足・不備等がないかご確認下さい。組み立て後の不良のご連絡はご対応致しかねますのでご注意下さい。お届けした商品がお申込み内容と異なっている場合や、破損・汚損している場合については、お取り替え・ご返品を承ります。但し、お取り替え・ご返品のご連絡は、商品到着後7日以内にお願いします。品質等については万全を期しておりますが、万一「お申し込み商品と異なる」「商品にキズや汚れがある」など、当社理由による返品の場合、送料は当社が負担します。運送途中の破損は、到着後1週間以上日時が経過しますと運送会社の対応が締め切られ、受付が不可能となります。誠に申し訳ございませんが、お早めにご連絡いただきますようお願い申し上げます。なお、事前に内容をお伺いすることなくご返送された場合の対応も致しかねますので、返品・交換をご希望の際は早急にご連絡ください。</p>
    <p class="mb30">次の場合、交換・返品はお受けできません。<br>
        ◆商品到着後、7日以上経過した場合<br>
        ◆開封・組み立てされ一度ご使用になられた商品<br>
        ◆お客様のもとでキズまたは汚損が生じた商品</p>

    <h3>ご注意</h3>
    <ul class="note">
        <li>・長期不在により商品をお届けできず返送になった場合、往復分の送料をご負担いただきます。</li>
        <li>・再出荷となった場合の出荷送料は、お客様負担となります。</li>
        <li>・通信販売を通しての購入商品は、特定商取引法によって規定されたクーリングオフ<br>
            (無条件解約)の適用対象外となります。<br>
            詳しくは<a href="http://www.meti.go.jp/" target="_blank">経済産業省</a>のホームページをご確認ください。</li>
    </ul>
</div>
            <?php include '../template/contactbox.php'; ?>
            </main>
        </div>
        <?php include '../template/bnrs.php'; ?>
    </div>
    <?php include '../template/footer.php'; ?>
</div>
<script type="text/javascript" src="/js/script.js"></script>
<?php include '../template/analytics.php' ?>
</body>
<!-- javascript-->
</html>
