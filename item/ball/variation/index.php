<ul class="variation-pict">
<?php
$target_dir = $myPath.'/variation/img/';
$fileList = array();
if( is_dir( $target_dir ) && $handle = opendir( $target_dir ) ) {
    while( ($file = readdir($handle)) !== false ) {

        if( filetype( $path = $target_dir . $file ) == "file" ) {
            array_push($fileList,$file);
        }
    }
}

for($i=0, $iMax = count($fileList); $i< $iMax; $i++){
    $num = $i+1;
    echo '<li><a href="./variation/img/' . htmlspecialchars($fileList[$i]) . '" class="modal-image" rel="gallery"><img src="./variation/img/' . htmlspecialchars($fileList[$i]) . '" alt="バリエーション'.$num.'"></a></li>';
}

?>
</ul>

