<?php
include_once('controller_header.php');
include_once('./php/data.php');


if(isset($_GET['article'])){
    include_once('./view/view_article.php'); 
}

else{
    include_once('./view/view_index.php');
}

?>