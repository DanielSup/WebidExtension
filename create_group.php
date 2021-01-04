<?php
include './common.php';
include INCLUDE_PATH . 'functions_user_groups.php';

// creating new group
$query = "INSERT INTO " . $DBPrefix . "user_groups (title) VALUES(:title)";

$params = array();
$params[] = array(':title', $_POST["title"], 'str');
$db->query($query, $params);

addCurrentUserToGroup($db->lastInsertId());

header("Location: /edit_data.php");
exit();
