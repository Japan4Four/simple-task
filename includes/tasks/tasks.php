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
        <?php foreach ($tasks as $task) { ?>
        <tr>
            <td><?php echo $task[1] ?></td>
            <td>
                <form action="#" method="post">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

