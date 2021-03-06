--TEST--
Phar front controller 404 [cache_list]
--INI--
phar.cache_list={PWD}/frontcontroller6.php
--SKIPIF--
<?php if (!extension_loaded("phar")) die("skip"); ?>
--ENV--
SCRIPT_NAME=/frontcontroller6.php
REQUEST_URI=/frontcontroller6.php/notfound.php
PATH_INFO=/notfound.php
--FILE_EXTERNAL--
files/frontcontroller.phar
--EXPECTHEADERS--
Status: 404 Not Found
--EXPECT--
<html>
 <head>
  <title>File Not Found</title>
 </head>
 <body>
  <h1>404 - File /notfound.php Not Found</h1>
 </body>
</html>