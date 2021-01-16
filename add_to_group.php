<?php
include './common.php';
include INCLUDE_PATH . 'functions_user_groups.php';

addCurrentUserToGroups($_POST['groups']);

header("Location: /groups.php");
exit();