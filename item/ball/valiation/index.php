<ul class="variation-pict">
<?php
    $target_dir = '/item/variations/' . $arr['code'] . '/img/';
    $num = 1;
    foreach (glob($target_dir . '{*.gif,*.jpg,*.png}', GLOB_BRACE) as $file) {
        if (is_file($file)) {
            echo '<li><a href="' . htmlspecialchars($file) . '" class="modal-image" rel="gallery"><img src="' . htmlspecialchars($file) . '" alt="バリエーション'.$num.'"></a></li>';
        }
    $num++;
    }
?>
</ul>
