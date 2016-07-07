<?php include('layout/includes/head.php'); ?>

<!-- Create Task form  -->
<div class="col-md-6 col-centered">
    <?php include('layout/includes/common/notifications.php'); ?>

    <div class="panel panel-default">
        <div class="panel-heading"><h5>Create Task:</h5></div>
        <div class="panel-body">
            <?php include('layout/forms/addtask.php'); ?>
        </div>
    </div>
</div>
<!-- Display current tasks -->
<div class="col-md-6 col-centered">
    <div class="panel panel-default">
        <div class="panel-heading"><h5>Active Tasks:</h5></div>
        <div class="panel-body">
            <?php include('layout/includes/tasks/tasks.php'); ?>
        </div>
    </div>
</div>

<?php include('layout/includes/footer.php'); ?>