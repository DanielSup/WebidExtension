<?php
include './common.php';
include INCLUDE_PATH . 'functions_user_groups.php';

$title_first_word = lowercaseFirstWord($_POST["title"]);

$query = "SELECT * FROM " . $DBPrefix. "user_groups";
$db->direct_query($query);
$group_with_same_or_similar_title = false;
while ($group = $db->fetch()){
    $lowercase_group_title = strtolower($group["title"]);
    $lowercase_group_title_first_word = lowercaseFirstWord($lowercase_group_title);
    if (strpos($lowercase_group_title, $title_first_word) !== false || strpos($title_first_word, $lowercase_group_title_first_word) !== false){
        $group_with_same_or_similar_title = true;
        break;
    }
}

if ($group_with_same_or_similar_title) {
    $_SESSION["error_value_title"] = $_POST["title"];
    $_SESSION["error_duplicate_group_name"] = true;
    header("Location: /groups.php");
} else {
    unset($_SESSION["error_value_title"]);
    unset($_SESSION["error_duplicate_group_name"]);
    // creating new group
    $query = "INSERT INTO " . $DBPrefix . "user_groups (title) VALUES(:title)";

    $params = array();
    $params[] = array(':title', $_POST["title"], 'str');
    $db->query($query, $params);

    addCurrentUserToGroup($db->lastInsertId());

    header("Location: /groups.php");
}

function lowercaseFirstWord($string){
    $first_word = explode(" ", $string)[0];
    return strtolower($first_word);
}
