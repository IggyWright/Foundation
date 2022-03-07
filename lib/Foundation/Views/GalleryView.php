<?php
namespace Foundation\Views;

class GalleryView extends View{
    public function __construct() {
        //set our page title
        $this->setTitle("Foundation - Portfolio!");

        //add our nav links
        $this->addLink("index.php", "About the Salon");
        $this->addLink("services.php", "Services & Pricing");
        // $this->addLink("team.php", "Meet Our Team");
        $this->addLink("gallery.php", "Gallery / Portfolio", true);
        $this->addLink("contact.php", "Contact Us");

    }

    public function showGalleryWidget() {
        $html = <<<HTML
            <div id="galleryWidget" class="widget">
HTML;

        $path = __DIR__ . "/../../../img/gallery";
        $files = scandir($path);
        shuffle($files);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $html .= '<div class="galleryContainer" onclick="zoomImage(this);">';
                $html .= '<img class="galleryImage" loading="lazy" src="img/gallery/' . $file . '">';
                $html .= '</div>';
            }
        }

        $html .= <<<HTML
            </div>
HTML;

        return $html;
    }

    public function javascript() {
        return <<<HTML
            <script src="js/mainFunctions.js"></script>
            <script src="js/galleryFunctions.js"></script>
HTML;
    }

}
