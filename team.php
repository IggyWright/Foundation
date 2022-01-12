<?php
use Foundation\Views\TeamView;

require_once 'lib/site.inc.php';

$view = new TeamView();
?>

<!DOCTYPE html>
<html lang="en">

    <?php echo $view->head('
        <link rel="stylesheet" type="text/css" href="css/team.css">
    '); ?>
    <?php echo $view->navigation(); ?>
    <?php echo $view->dropdownNavigation(); ?>
    <?php echo $view->showTeamWidget(); ?>
    <?php echo $view->javascript(); ?>

</html>
