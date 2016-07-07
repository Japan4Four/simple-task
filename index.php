<?php include('includes/head.php'); ?>

<!-- TODO: Create our Task form  -->
<div class="col-md-6 col-centered">
    <div class="panel panel-default">
        <div class="panel-heading"><h5>Create Task:</h5></div>
        <div class="panel-body">
            <form method="post" action="#" class="add-task">
                <input class="form-control" id="task-control" type="text" placeholder="Create Task">
                <input class="btn btn-default" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
<!-- TODO: Display current tasks -->
<div class="col-md-6 col-centered">
    <div class="panel panel-default">
        <div class="panel-heading"><h5>Active Tasks:</h5></div>
        <div class="panel-body">
            <?php include('includes/tasks/tasks.php'); ?>
        </div>
    </div>
</div>

<?php include('includes/footer.php');