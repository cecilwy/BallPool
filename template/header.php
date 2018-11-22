

<?php
$associative_array = debug_backtrace();
$item_detail_current = '';

//アイテム詳細
if(strpos($associative_array[0]['file'],'/item/detail')) {
    $item_detail_current = 'current';
}

?>

<header>
    <div id="logo"><a href="/"><img src="/img/logo.png" alt="ボールプール.com"></a></div>
    <nav>
        <ul>
            <li><a href="#"><img src="/img/tel.png" alt="0120-71-1010"></a></li>
            <li><a href="#"><img src="/img/contact.png" alt="0120-71-1010"></a></li>
        </ul>
        <ul class="menu">
            <li><a href="#"><img src="/img/menu_01_off.png" alt="ご利用ガイド"></a></li>
            <li><a href="#"><img class="<?= $item_detail_current ;?>" src="/img/menu_02_on.png" alt="商品一覧"></a></li>
            <li><a href="#"><img src="/img/menu_03_off.png" alt="施工事例"></a></li>
            <li><a href="#"><img src="/img/menu_04_off.png" alt="よくある質問"></a></li>
            <li><a href="#"><img src="/img/menu_05_off.png" alt="特注品について"></a></li>
            <li><a href="#"><img src="/img/menu_06_off.png" alt="会社案内"></a></li>
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
    <li><a href="#"><img class="current" src="/img/menu_01_off.png" alt="ご利用ガイド"></a></li>
    <li><a href="#"><img class="current" src="/img/menu_02_off.png" alt="商品一覧"></a></li>
    <li><a href="#"><img class="current" src="/img/menu_03_off.png" alt="施工事例"></a></li>
    <li><a href="#"><img class="current" src="/img/menu_04_off.png" alt="よくある質問"></a></li>
    <li><a href="#"><img class="current" src="/img/menu_05_off.png" alt="特注品について"></a></li>
    <li><a href="#"><img class="current" src="/img/menu_06_off.png" alt="会社案内"></a></li>
    <li><a href="#"><img src="/img/tel.png" alt="0120-71-1010"></a></li>
    <li><a href="#"><img src="/img/contact.png" alt="0120-71-1010"></a></li>
</ul>
</div>


