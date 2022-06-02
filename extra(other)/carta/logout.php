<?php
setcookie("logged", "", time()-1);

header("location: index.php");
exit();
?>
