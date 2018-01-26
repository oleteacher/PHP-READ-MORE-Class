<?php
require_once 'classes/ReadMore.php';
$read = new ReadMore;
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
	


if(!isset($_GET['r'])){
echo $read->Read(
[
	'str' => $text,
	'limit' => 200,
	'start' => 0,
]
);
$count = $read->CountStr($text);
$limit = 200;
if($count >= $limit){
?>
<li><a href="example.php?r=1">Read More</a></li>
<?php }} 
if(isset($_GET['r'])){
echo $read->Read(
[
	'str' => $text,
	'limit' => $read->CountStr($text),
	'start' => 0,
]);	
}
?>