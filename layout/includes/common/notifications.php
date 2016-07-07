<?php
if(!empty($_GET['result']) && $_GET['result'] == 'success') { ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>
            <strong>Success!</strong>
            You have successfully submitted a task!
        </p>
    </div>
<?php } elseif (!empty($_GET['result']) && $_GET['result'] == 'task-deleted') {?>
    <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>
            <strong>You have successfully deleted your task!</strong>
        </p>
    </div>
<?php } elseif(!empty($_GET['result'])) { ?>

    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>
            <strong>Oops!</strong>
            Something weird happened. Try submitting again.
        </p>
    </div>
<?php } ?>