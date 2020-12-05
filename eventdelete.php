<?php

$mykey1=$_REQUEST['key1'];

$con = mysqli_connect("localhost", "root", "");

if (!$con) {
  die();
}

mysqli_select_db($con, "users");
mysqli_query($con,"delete from event where id = '$mykey1'");
echo "<script>location.href='events.php'</script>"

?> 