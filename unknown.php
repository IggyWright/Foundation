<?php
use Foundation\Views\UnknownView;

require_once 'lib/site.inc.php';

$view = new UnknownView();
?>

<!DOCTYPE html>
<html lang="en">

    <?php echo $view->head('
        <link rel="stylesheet" type="text/css" href="css/unknown.css">
    '); ?>
    <?php echo $view->navigation(); ?>
    <?php echo $view->dropdownNavigation(); ?>
    <?php echo $view->presentUnknownPage(); ?>
    <?php echo $view->javascript(); ?>

</html>
