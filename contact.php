<?php
use Foundation\Views\ContactView;

require_once 'lib/site.inc.php';

$view = new ContactView();
?>

<!DOCTYPE html>
<html lang="en">

    <?php echo $view->head('
        <link rel="stylesheet" type="text/css" href="css/contact.css">
    '); ?>
    <?php echo $view->navigation(); ?>
    <?php echo $view->dropdownNavigation(); ?>
    <?php echo $view->presentContactForm(); ?>
    <?php echo $view->javascript(); ?>

</html>
