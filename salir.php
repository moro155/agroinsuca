<?php require('metaheader.php');?>
<?php
SESSION_START();
unset($_SESSION['cliente']);
session_destroy();
echo "<script>$(\"html\").load('./index.php');</script>";
?>
<?php require('footer.php'); ?>