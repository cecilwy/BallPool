<ul class="variation-pict">
<?php
    $target_dir = $myPath.'/variation/img/';
    $num = 1;


$fileList = array();

// ディレクトリの存在を確認し、ハンドルを取得
if( is_dir( $target_dir ) && $handle = opendir( $target_dir ) ) {

    // ループ処理
    while( ($file = readdir($handle)) !== false ) {
        // ファイルのみ取得
        if( filetype( $path = $target_dir . $file ) == "file" ) {
            /********************

            各ファイルへの処理

            $file ファイル名
            $path ファイルのパス

             ********************/
            array_push($fileList,$file);

        }
    }
}

for($i=0, $iMax = count($fileList); $i< $iMax; $i++){
    echo '<li><a href="./variation/img/' . htmlspecialchars($fileList[$i]) . '" class="modal-image" rel="gallery"><img src="./variation/img/' . htmlspecialchars($fileList[$i]) . '" alt="バリエーション'.$num.'"></a></li>';
}

?>
</ul>

