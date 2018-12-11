<html>
<body>
<?php
$str = "username";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo "username: ".$_POST[$newstr];
?>
</body>
</html>