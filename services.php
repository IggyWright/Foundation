<?php
use Foundation\Views\ServicesView;

require_once 'lib/site.inc.php';

$view = new ServicesView();
?>

<!DOCTYPE html>
<html lang="en">

    <?php echo $view->head('
        <link rel="stylesheet" type="text/css" href="css/services.css">
    '); ?>
    <?php echo $view->navigation(); ?>
    <?php echo $view->dropdownNavigation(); ?>
    <?php echo $view->showServicesAndPricing(); ?>
    <?php echo $view->javascript(); ?>

</html>
