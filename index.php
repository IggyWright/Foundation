<?php
use Foundation\Views\IndexView;

require_once 'lib/site.inc.php';

$view = new IndexView();
?>

<!DOCTYPE html>
<html lang="en">

    <?php echo $view->head('
        <link rel="stylesheet" type="text/css" href="css/index.css">
    '); ?>
    <?php echo $view->navigation(); ?>
    <?php echo $view->dropdownNavigation(); ?>
    <?php echo $view->aboutWidget(); ?>
    <?php echo $view->javascript(); ?>

</html>
