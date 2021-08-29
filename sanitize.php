<?php
function sanitize($str)
{
  global $connection;

  if (empty($str)) {
    return $str;
  } else {
    $str = mysqli_real_escape_string($connection, trim(stripslashes(htmlentities(strip_tags($str), ENT_QUOTES, "UTF-8"))));
    return $str;
  }
}
?>
