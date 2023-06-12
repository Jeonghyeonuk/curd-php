<?php

$fp = fopen("memo.txt", "a");

print_r($_REQUEST);
$now = date("Y-m-d H:i:s");
$content = $_REQUEST['name'] . "///" . $_REQUEST['mail'] . '///' . $_REQUEST['content'] . '///' . $now . "\r\n";


fwrite($fp, $content);

fclose($fp)

    ?>

<script>
    location.href = "memo.php"
</script>