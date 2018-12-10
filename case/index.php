<?php

//メタ情報をここで設定
$title = '施工事例';
$keyword = '';
$description = '';

?>

    <!DOCTYPE html>
    <html lang="ja">
    <?php include '../template/meta.php'; ?>
    <body id="case">
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
                        <h1 class="head01">施工事例</h1>
                        <?php if (isSmartPhone()) { ?>
                            <div class="items">
                                <div class="item item--left">
                                    <img src="img/img-01.jpg" alt="">
                                </div>
                                <div class="item item--right r-txt">
                                    <h2>アミューズメント施設の納入・設置事例<br/>
                                        <span> (広島県)</span></h2>
                                    <p>
                                        広島県のショッピングモール内のアミューズメント施設のボールプールを施工させていただきました。<br/>
                                        木製のアンカーレールをサイドガードの中に入れ込み、連結しておりますので、簡単に動かすことのできない仕様となっております。<br/>
                                        ボールは70ケース（500個入り）　35,000個が入っております。中央のエアー遊具につきましては、お客様でご用意されました。
                                    </p>
                                </div>
                            </div>

                            <div class="items">
                                <div class="item item--left">
                                    <img src="img/img-02.jpg" alt="">
                                </div>
                                <div class="item item--right r-txt">
                                    <h2>アミューズメント施設の納入・設置事例<br/>
                                        <span> (滋賀県)</span></h2>
                                    <p>
                                        直径7ｍの丸型ボールプール、たくさんのお子さんが遊べるアミューズメント施設ならではの大型商品です。
                                        周りのクッションがカラフルでかわいらしく、こちらはマジックテープでの固定となりますので、外して遊ぶことも可能です。
                                    </p>
                                </div>
                            </div>

                            <div class="items">
                                <div class="item item--left">
                                    <img src="img/img-03.jpg" alt="">
                                </div>
                                <div class="item item--right r-txt">
                                    <h2>公共施設の納入・設置事例<br/>
                                        <span>(長野県)</span></h2>
                                    <p>
                                        弊社のボールプールセット　セットAを学校の方へ寄付していただきました。<br/>
                                        地元新聞にも取り上げていただき、子供たちにも大変人気でお喜びいただけていると嬉しいご報告をいただきました。
                                    </p>
                                </div>
                            </div>

                            <div class="items">
                                <div class="item item--left">
                                    <img src="img/img-04.jpg" alt="">
                                </div>
                                <div class="item item--right r-txt">
                                    <h2>幼児教室の納入・設置事例<br/>
                                        <span>(兵庫県明石市)</span></h2>
                                    <p>
                                        兵庫県明石市にある幼児教室のリニューアルに伴って、滑り台付のボールプールを納品させていただきました。<br/>
                                        赤と白で高揚感のある、配色でご注文頂きました。
                                    </p>
                                </div>
                            </div>


                        <?php } else { ?>


                            <div class="items">
                                <div class="item item--left">
                                    <img src="img/img-01.jpg" alt="">
                                </div>
                                <div class="item item--right r-txt">
                                    <h2>アミューズメント施設の納入・設置事例<br/>
                                        <span> (広島県)</span></h2>
                                    <p>
                                        広島県のショッピングモール内のアミューズメント施設のボールプールを施工させていただきました。<br/>
                                        木製のアンカーレールをサイドガードの中に入れ込み、連結しておりますので、簡単に動かすことのできない仕様となっております。<br/>
                                        ボールは70ケース（500個入り）　35,000個が入っております。中央のエアー遊具につきましては、お客様でご用意されました。
                                    </p>
                                </div>
                            </div>

                            <div class="items">
                                <div class="item item--left l-txt">
                                    <h2>アミューズメント施設の納入・設置事例<br/>
                                        <span> (滋賀県)</span></h2>
                                    <p>
                                        直径7ｍの丸型ボールプール、たくさんのお子さんが遊べるアミューズメント施設ならではの大型商品です。
                                        周りのクッションがカラフルでかわいらしく、こちらはマジックテープでの固定となりますので、外して遊ぶことも可能です。
                                    </p>
                                </div>
                                <div class="item item--right">
                                    <img src="img/img-02.jpg" alt="">
                                </div>
                            </div>


                            <div class="items">
                                <div class="item item--left">
                                    <img src="img/img-03.jpg" alt="">
                                </div>
                                <div class="item item--right r-txt">
                                    <h2>公共施設の納入・設置事例<br/>
                                        <span>(長野県)</span></h2>
                                    <p>
                                        弊社のボールプールセット　セットAを学校の方へ寄付していただきました。<br/>
                                        地元新聞にも取り上げていただき、子供たちにも大変人気でお喜びいただけていると嬉しいご報告をいただきました。
                                    </p>
                                </div>
                            </div>

                            <div class="items">
                                <div class="item item--left l-txt">
                                    <h2>幼児教室の納入・設置事例<br/>
                                        <span>(兵庫県明石市)</span></h2>
                                    <p>
                                        兵庫県明石市にある幼児教室のリニューアルに伴って、滑り台付のボールプールを納品させていただきました。<br/>
                                        赤と白で高揚感のある、配色でご注文頂きました。
                                    </p>
                                </div>
                                <div class="item item--right">
                                    <img src="img/img-04.jpg" alt="幼児教室の納入・設置事例">
                                </div>
                            </div>
                        <?php } ?>
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
<?php
/**
 * UA取得
 * @return string
 */
function getUserAgent()
{

    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

    return $userAgent;
}

/**
 * スマホかどうか判定
 * @return bool
 */
function isSmartPhone()
{


    $ua = getuserAgent();

    if (stripos($ua, 'iphone') !== false || // iphone
        stripos($ua, 'ipod') !== false || // ipod
        (stripos($ua, 'android') !== false && stripos($ua, 'mobile') !== false) || // android
        (stripos($ua, 'windows') !== false && stripos($ua, 'mobile') !== false) || // windows phone
        (stripos($ua, 'firefox') !== false && stripos($ua, 'mobile') !== false) || // firefox phone
        (stripos($ua, 'bb10') !== false && stripos($ua, 'mobile') !== false) || // blackberry 10
        (stripos($ua, 'blackberry') !== false) // blackberry
    ) {
        $isSmartPhone = true;
    } else {
        $isSmartPhone = false;
    }

    return $isSmartPhone;
}