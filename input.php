<?php
$input = $_POST["input"];
$output = "あなたが入力したのは「" . $input . "」ですね？";
?>

<html>
<head>
<title>入力表示</title>
</head>
<body>

<p><?php print($output); ?></p>
</body>
</html>
