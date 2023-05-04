<?php
session_start();

$out = "<ul>";
// Does IP Address match?
if ($_SERVER['REMOTE_ADDR'] != $_SESSION['ipaddress'])
{
  session_unset();
  session_destroy();
  $out .= '<li>remote address mismatch</li>';
}

// Does user agent match?
if ($_SERVER['HTTP_USER_AGENT'] != $_SESSION['useragent'])
{
  session_unset();
  session_destroy();
  $out .= '<li>user agent mismatch</li>';
}

// Is the last access over an hour ago?
if (time() > ($_SESSION['lastaccess'] + 3600))
{
  session_unset();
  session_destroy();
  $out .= '<li>last access expired</li>';
}
else
{
  $_SESSION['lastaccess'] = time();
}
$out .= "</ul>";
echo $out;