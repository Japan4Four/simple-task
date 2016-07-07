<form method="post" action="functions/Tasks.php" class="add-task">
    <?php if(!empty($_GET['result']) && $_GET['result'] == 'empty-field' ||!empty($_GET['result']) && $_GET['result'] == 'name-exists') { ?>
        <div class="has-error">
            <input name="task" class="form-control task-control" id="inputError2" type="text" placeholder="Create Task">
            <input class="btn btn-default" type="submit" name="add" value="Add Task">
            <?php if (!empty($_GET['result']) && $_GET['result'] == 'empty-field') { ?>
                <span class="error">You must first name your Task.</span>
            <?php } elseif (!empty($_GET['result']) && $_GET['result'] == 'name-exists') { ?>
                <span class="error">This name already exists. Choose another name.</span>
            <?php } ?>
        </div>
    <?php } else { ?>
        <input name="task" class="form-control task-control" id="inputError2" type="text" placeholder="Create Task">
        <input class="btn btn-default" type="submit" name="add" value="Add Task">
    <?php } ?>
</form>