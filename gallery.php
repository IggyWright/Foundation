<?php
use Foundation\Views\GalleryView;

require_once 'lib/site.inc.php';

$view = new GalleryView();
?>

<!DOCTYPE html>
<html lang="en">

    <?php echo $view->head('
        <link rel="stylesheet" type="text/css" href="css/gallery.css">
    '); ?>
    <?php echo $view->navigation(); ?>
    <?php echo $view->dropdownNavigation(); ?>
    <?php echo $view->showGalleryWidget(); ?>
    <?php echo $view->javascript(); ?>

</html>
