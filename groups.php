<?php
include 'common.php';

$query = "SELECT * FROM " . $DBPrefix . "user_groups_members m RIGHT OUTER JOIN " . $DBPrefix . "user_groups g ON m.user_groups_id = g.id WHERE m.users_id = ". $user->user_data['id'];
$db->direct_query($query);
$group_data = $db->fetchall();

foreach ($group_data as $group){
    $template->assign_block_vars('groups', array(
        'GROUP_ID' => $group['id'],
        'GROUP_NAME' => $group['title']
    ));
}

$query = "SELECT * FROM " . $DBPrefix. "user_groups g WHERE NOT EXISTS (SELECT * FROM " . $DBPrefix . "user_groups_members m WHERE m.user_groups_id = g.id AND m.users_id = " . $user->user_data['id'] . ")";
$db->direct_query($query);
$group_to_add_data = $db->fetchall();

foreach($group_to_add_data as $group){
    $template->assign_block_vars('groups_to_add', array(
        'GROUP_ID' => $group['id'],
        'GROUP_NAME' => $group['title']
    ));
}

$template->assign_vars(array(
    'ERROR_DUPLICATE_GROUP_NAME' => isset($_SESSION["error_duplicate_group_name"]) ? $MSG["error_duplicate_group_name"] : null,
    'ERROR_VALUE' => isset($_SESSION["error_value_title"]) ? $_SESSION["error_value_title"] : null
));

$TMP_usmenutitle = $MSG['1200'];
include 'header.php';
include INCLUDE_PATH . 'user_cp.php';
$template->set_filenames(array(
    'body' => 'groups.tpl'
));
$template->display('body');
include 'footer.php';