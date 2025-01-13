<?php
define('HOME_DIR', '/home/foo');
define('LOG_DIR', HOME_DIR . '/logs');

echo HOME_DIR . "\n";   // /home/foo を出力
echo LOG_DIR . "\n";    // /home/foo/logs を出力