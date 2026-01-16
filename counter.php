<?php
$path = __DIR__ . '/counter.txt';
if (!file_exists($path)) { file_put_contents($path, "0"); }

$fp = fopen($path, 'c+');
flock($fp, LOCK_EX);

$val = (int)trim(stream_get_contents($fp));
$val++;

ftruncate($fp, 0);
rewind($fp);
fwrite($fp, (string)$val);

flock($fp, LOCK_UN);
fclose($fp);

echo $val;
