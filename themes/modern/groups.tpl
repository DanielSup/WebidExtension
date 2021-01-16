<!-- INCLUDE user_menu_header.tpl -->

<div class="well">
    <legend>{L_1200}</legend>
    <form action="/add_to_group.php" method="post">
        <div class="row form-group">
            <!-- BEGIN groups_to_add -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="{groups_to_add.GROUP_ID}" id="groups[]" name="groups[]">
                <label>{groups_to_add.GROUP_NAME}</label>
            </div>
            <!-- END groups_to_add -->
        </div>
        <div class="row form-group">
            <input class="btn btn-primary" type="submit" value="{L_1203}">
        </div>
    </form>
    <legend>{L_1206}</legend>
    <div class="row">
        <!-- BEGIN groups -->
        <div>
            <div class="col-xs-6">
                <label>{groups.GROUP_NAME}</label>
            </div>
            <div class="col-xs-6">
                <a class="btn btn-danger" href="/remove_membership.php?group_id={groups.GROUP_ID}">{L_1204}</a>
            </div>
        </div>
        <!-- END groups -->
    </div>
    <legend style="margin-top: 1em">{L_1205}</legend>
    <form action="/create_group.php" method="post">
        <p>{L_note_name_group_as_facebook_group}</p>
        <!-- IF ERROR_DUPLICATE_GROUP_NAME -->
        <div class="error-box">
            <span class="text-danger">{ERROR_DUPLICATE_GROUP_NAME}</span>
        </div>
        <!-- ENDIF -->
        <div class="row">
            <div class="form-group">
                <label>{L_1202}</label>
                <div>
                    <input type="text" name="title" class="form-control"
                    <!-- IF ERROR_VALUE -->
                    value="{ERROR_VALUE}"
                    <!-- ENDIF -->
                    required>
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="{L_1201}">
            </div>
        </div>
    </form>
</div>