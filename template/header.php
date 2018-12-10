
<?php
$associative_array = debug_backtrace();

$guidance_current = '';
$guidance_ext = '_off';

$item_detail_current = '';
$item_detail_ext = '_off';

$case_current = '';
$case_ext = '_off';

$qa_current = '';
$qa_ext = '_off';


$custom_order_current = '';
$custom_order_ext = '_off';

$company_current = '';
$company_ext = '_off';


//ご利用ガイド
if(strpos($associative_array[0]['file'],'/guide/')) {
    $guidance_current = 'current';
    $guidance_ext = '_on';
}

//商品
if(strpos($associative_array[0]['file'],'/item/')) {
    $item_detail_current = 'current';
    $item_detail_ext = '_on';
}

//施行事例
if(strpos($associative_array[0]['file'],'/case/')) {
    $case_current = 'current';
    $case_ext = '_on';
}
//QA
if(strpos($associative_array[0]['file'],'/qa/')) {
    $qa_current = 'current';
    $qa_ext = '_on';
}
//特注品について
if(strpos($associative_array[0]['file'],'/custom_order/')) {
    $custom_order_current = 'current';
    $custom_order_ext = '_on';
}
//特注品について
if(strpos($associative_array[0]['file'],'/company/')) {
    $company_current = 'current';
    $company_ext = '_on';
}



?>

<header>
    <div id="logo"><a href="/"><img src="/img/logo.png" alt="ボールプール.com"></a></div>
    <nav>
        <ul>
            <li><a href="tel:0120-71-1010"><img src="/img/tel.png" alt="0120-71-1010"></a></li>
            <li><a href="//systemsofa.com/MailSystem/user/?reffere=coto-kito.com" target="_blank"><img src="/img/contact.png" alt="お問い合わせフォーム"></a></li>
        </ul>
        <ul class="menu">
            <li><a href="/guide/"><img class="<?= $guidance_current ?>" src="/img/menu_01<?= $guidance_ext ?>.png" alt="ご利用ガイド"></a></li>
            <li><a href="/item/"><img class="<?= $item_detail_current ?>" src="/img/menu_02<?= $item_detail_ext ?>.png" alt="商品一覧"></a></li>
            <li><a href="/case/"><img class="<?= $case_current ?>" src="/img/menu_03<?= $case_ext ?>.png" alt="施工事例"></a></li>
            <li><a href="/qa/"><img class="<?= $qa_current ?>" src="/img/menu_04<?= $qa_ext ?>.png" alt="よくある質問"></a></li>
            <li><a href="/custom_order/"><img class="<?= $custom_order_current ?>" src="/img/menu_05<?= $custom_order_ext ?>.png" alt="特注品について"></a></li>
            <li><a href="/company/"><img class="<?= $company_current ?>" src="/img/menu_06<?= $company_ext ?>.png" alt="会社案内"></a></li>
        </ul>
    </nav>

    <div id="humberger" class="sp-menu">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <br class="clear_noie">
</header>
<hr>

<div id="sp-nav">
<ul>
    <li><a href="/"><img class="current" src="/img/logo.png" alt="ボールプール.com"></a></li>
    <li><a href="/guide/"><img class="current" src="/img/menu_01_sp.png" alt="ご利用ガイド"></a></li>
    <li><a href="/item/"><img class="current" src="/img/menu_02_sp.png" alt="商品一覧"></a></li>
    <li><a href="/case/"><img class="current" src="/img/menu_03_sp.png" alt="施工事例"></a></li>
    <li><a href="/qa/"><img class="current" src="/img/menu_04_sp.png" alt="よくある質問"></a></li>
    <li><a href="/custom_order/"><img class="current" src="/img/menu_05_sp.png" alt="特注品について"></a></li>
    <li><a href="/company/"><img class="current" src="/img/menu_06_sp.png" alt="会社案内"></a></li>
    <li class="grey">
        <table width="100%">
            <tbody>
            <tr>
                <td><a href="/sites/">運営サイトのご案内</a></td>
                <td><a href="/sites/">プライバシーポリシー</a></td>
            </tr>
            <tr>
                <td><a href="https://www.tenpokagushop.com/corp/recruit/staff.html" target="_blank">スタッフ紹介</a></td>
                <td><a href="/color/">カラー・素材表</a></td>
            </tr>
            </tbody>
        </table>
    </li>
    <li><a href="tel:0120-71-1010"><img src="/img/tel_sp.png" alt="0120-71-1010"></a></li>
    <li><a href="https://systemsofa.com/MailSystem/user/?reffere=ball-pool.com" target="_blank"><img src="/img/contact_sp.png" alt="0120-71-1010"></a></li>
</ul>
</div>
