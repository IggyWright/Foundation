<?php
namespace Foundation\Views;

class UnknownView extends View{
    public function __construct() {
        //set our page title
        $this->setTitle("Foundation - About the Salon!");

        //add our nav links
        $this->addLink("index.php", "About the Salon");
        $this->addLink("services.php", "Services & Pricing");
        // $this->addLink("team.php", "Meet Our Team");
        $this->addLink("gallery.php", "Gallery / Portfolio");
        $this->addLink("contact.php", "Contact Us");

    }

    public function presentUnknownPage() {
        return <<<HTML
            <div id="unknownWidget" class="widget">
                Sorry that page can't be found
            </div>
HTML;
    }

    public function javascript() {
        return <<<HTML
            <script src="js/mainFunctions.js"></script>
HTML;
    }
}
