<?php

include '/wp-admin/includes/plugin.php';

$cookie_name = "samplekookie";
$cookie_value = "1";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

header("Refresh:0"); //should refresh the page but does not
echo "<script>window.location.reload(true);</script>";
?>
