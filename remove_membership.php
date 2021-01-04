<?php
include './common.php';

$query = "DELETE FROM " . $DBPrefix . "user_groups_members WHERE user_groups_id = " . $_GET['group_id']. " AND users_id = " . $user->user_data['id'];
$db->query($query);

header("Location: /edit_data.php");
exit();