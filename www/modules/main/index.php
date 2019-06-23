<?php 

$details = R::find('about', 1);
// print_r($details);

$aboutName = $details[1]['name'];
$aboutDescr = $details[1]['descr'];



// $title = "Главная";
// $content = "Содерживое главной страницы";


ob_start();
include ROOT . "templates/_mainpage/_main.tpl";
$content = ob_get_contents();
ob_end_clean();


include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/_template.tpl";
include ROOT . "templates/_parts/_footer.tpl";





?>