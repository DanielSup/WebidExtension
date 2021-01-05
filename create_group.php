<?php
include './common.php';
include INCLUDE_PATH . 'functions_user_groups.php';

$query = "SELECT * FROM " . $DBPrefix. "user_groups WHERE " . $DBPrefix. "user_groups.title = \"". $_POST["title"]. "\"";
$db->direct_query($query);
$groups = $db->fetchall();

if (count($groups)) {
    $_SESSION["error_value_title"] = $_POST["title"];
    header("Location: /edit_data.php?error_duplicate_group_name=true");
} else {
    // creating new group
    $query = "INSERT INTO " . $DBPrefix . "user_groups (title) VALUES(:title)";

    $params = array();
    $params[] = array(':title', $_POST["title"], 'str');
    $db->query($query, $params);

    addCurrentUserToGroup($db->lastInsertId());

    header("Location: /edit_data.php");
}
