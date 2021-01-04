<?php

function addCurrentUserToGroup($groupId){
    global $DBPrefix, $db, $user;

    // adding current user to newly created group
    $query = "INSERT INTO " . $DBPrefix . "user_groups_members (user_groups_id, users_id) VALUES(:group_id, :user_id)";

    $params = array();
    $params[] = array(':group_id', $groupId, 'int');
    $params[] = array(':user_id', $user->user_data["id"], 'int');
    $db->query($query, $params);
}