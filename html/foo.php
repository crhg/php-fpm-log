<?php
ini_set('error_reporting', E_ALL);

error_log('foo error!!');
echo $x['foo'];
file_put_contents('php://stderr', "output to stderr!!\n");

phpinfo();
