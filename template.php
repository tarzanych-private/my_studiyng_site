<?php

$Page->OnGlobalBeforeDisplay();
$Page->OnBeforeDisplay();
include($config['absolutePath'] . "template/header.php");
include($config['absolutePath'] . "template/body.php");
include($config['absolutePath'] . "template/footer.php");
$Page->OnAfterDisplay();
$Page->OnGlobalAfterDisplay();
?>