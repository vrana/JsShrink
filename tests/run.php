<?php
include dirname(__FILE__) . "/../jsShrink.php";

foreach (glob(dirname(__FILE__) . "/input/*") as $filename) {
	$file = file_get_contents($filename);
	$shrinked = jsShrink($file);
	$expect = dirname(__FILE__) . "/expect/" . basename($filename);
	if (!file_exists($expect)) {
		file_put_contents($expect, $shrinked);
		echo basename($filename) . " created.\n";
	} elseif ($shrinked !== file_get_contents($expect)) {
		echo basename($filename) . " failed.\n";
	}
}
