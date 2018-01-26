<?php
require_once 'classes/ReadMore.php';
$read = new ReadMore;
$text = "hay i am malik and i am best php programmer";
echo $read->Read(
[
	'str' => $text,
	'limit' => 10,
	'start' => 20,
]
);