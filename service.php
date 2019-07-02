<?php 

$bookmarkArray = array();

if (!file_exits('bookmark.json')) {
    touch("bookmark.json");
}else{
    $data = file_get_contents("bookmark.json");
    $bookmarkArray = json_decode($data,true);
}

if ($_GET['action'] == 'add') {
    print_r($_POST);
}

?>