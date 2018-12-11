<?php
//現在のURLを取得して$canonicalにセット
$canonical = now_url();
?>

<head>
    <meta charset="utf-8">
    <!-- meta-->
    <title>ボールプール.com | <?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keyword ?>">
    <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <!-- smartphone meta-->
    <meta name="viewport" content="width=768px,user-scalable=0, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="http://example.com/webclipicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- canonical url-->
    <link rel="canonical" href="<?= $canonical ?>">
    <!-- stylesheet-->
    <link href="/css/jquery-ui.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<?php
function now_url( $prm = 0 ){
    $return_url = '';
    $scheme = empty($_SERVER['HTTPS']) ? 'http://' : 'https://'; // httpとhttpsの検知

// 渡された引数によって返す値を変える
    switch( $prm ){
        case 1:     // URLのクエリまで(クエリの?の前に/が入る)
            $return_url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            break;
        case 2:     // ドメインまで(最後に/は付かない)
            $return_url = $_SERVER['HTTP_HOST'];
            break;
        default:    // 現在のファイル名まで(URLにてファイル名が省略されていても非省略に変換される)
            $return_url = $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
            break;
    }

    $return_url = str_replace("index.php","",$return_url);  // index.phpを除去
    $return_url = str_replace("//","/",$return_url);        // スラッシュが重複した部分を直す
    return $scheme.$return_url;                             // スキームを追加して返す
}
