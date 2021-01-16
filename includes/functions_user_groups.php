<?php

function addCurrentUserToGroup($groupId){
    global $DBPrefix, $db, $user;

    // adding current user to newly created group
    $query = "INSERT INTO " . $DBPrefix . "user_groups_members (user_groups_id, users_id) VALUES(:group_id, :user_id)";

    $params = array();
    $params[] = array(':group_id', $groupId, 'int');
    $params[] = array(':user_id', $user->user_data['id'], 'int');
    $db->query($query, $params);
}

function addCurrentUserToGroups($groups) {
    global $DBPrefix, $db, $user;
    // adding current user to newly created group
    $query_without_values = "INSERT INTO " . $DBPrefix . "user_groups_members (user_groups_id, users_id) VALUES";
    $query_values = "";

    $i = 0;
    foreach($groups as $group){
        $comma = $i >= 1 ? ', ' : '';
        $query_values .= $comma . "(". $group .", ". $user->user_data['id']. ")";
        $i++;

        if ($i >= 200){
            $query = $query_without_values . $query_values;
            $db->query($query);

            $i = 0;
            $query_values = "";
        }
    }

    if ($query_values != ""){
        $query = $query_without_values . $query_values;
        $db->query($query);
    }
}