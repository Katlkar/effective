<?php
 $mykey1=$_REQUEST['key1'];

$con = mysqli_connect("localhost", "root", "");

if (!$con) {
  die();
}

mysqli_select_db($con, "users");
mysqli_query($con,"delete from q_and_a where id = '$mykey1'");
echo "<script>location.href='question.php'</script>"?>