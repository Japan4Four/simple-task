<?php
require_once ('functions/Tasks.php');
$tasks = getAllTasks();
?>

<div class="col-md-12 col-centered">
    <table class="table table-striped">
        <thead>
            <th>Task:</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
        <!-- List each of our tasks -->
        <?php foreach ($tasks as $task) { ?>
        <tr>
            <td><?php echo $task[1] ?></td>
            <td>
                <form action="functions/Tasks.php" method="post">
                    <input type="hidden" name="task-id" value="<?php echo $task[0]; ?>">
                    <input name="delete" type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

