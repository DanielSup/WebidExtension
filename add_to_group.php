<?php
include './common.php';
include INCLUDE_PATH . 'functions_user_groups.php';

addCurrentUserToGroup($_GET['group_id']);

header("Location: /edit_data.php");
exit();