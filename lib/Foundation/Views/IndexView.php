<?php
namespace Foundation\Views;

class IndexView extends View{
    public function __construct() {
        //set our page title
        $this->setTitle("Foundation - About the Salon!");

        //add our nav links
        $this->addLink("index.php", "About the Salon", true);
        $this->addLink("services.php", "Services & Pricing");
        $this->addLink("team.php", "Meet Our Team");
        $this->addLink("gallery.php", "Gallery / Portfolio");
        $this->addLink("contact.php", "Contact Us");

    }

    public function aboutWidget() {
        $html = <<<HTML
            <div id="aboutWidget" class="widget">
                <div id="bannerContainer">
                    <div id="bannerOverlayText">
                        <div id="upperText">Find your next look</div>
                        <div id="lowerText">FOUNDATION</div>
                    </div>
                    <div id="slideBanner">
                        <img class="slideImage" src="img/about-slide/slide-1.jpg">
                        <img class="slideImage" src="img/about-slide/slide-2.jpg">
                        <img class="slideImage" src="img/about-slide/slide-3.jpg">
                        <img class="slideImage" src="img/about-slide/slide-4.jpg">
                        <img class="slideImage" src="img/about-slide/slide-5.jpg">
                    </div>
                </div>

                <div id="missionStatement">
                    <div id="missionTitle">Mission</div>
                    <div id="missionText">
                        "Our clients are the most important people to us. It is our belief to look after each client in a professional and courteous manner. We believe in quality training to ensure we meet our clients’ demands. We give 100% of our time and attention to making sure each client leaves Foundation feeling not only refreshed, but also revived."
                    </div>
                </div>

                <div class="galleryContainer">
                    <div class="galleryTitle">Interior</div>
                    <div class="galleryContent">
                        <div class="arrow"  onclick="cycleInteriorImage(-1);">&#8249;</div>
                        <img id="interiorMainImage" src="img/interior/saloon-1.jpg" onclick="zoomImage(this);">
                        <div class="arrow" onclick="cycleInteriorImage(1);">&#8250;</div>
                    </div>
                    <div class="gallerySelector">
                        <img id="activeInterior" class="interiorImage" src="img/interior/saloon-1.jpg" onclick="selectInteriorImage(this);">
                        <img class="interiorImage" src="img/interior/saloon-2.jpg" onclick="selectInteriorImage(this);">
                        <img class="interiorImage" src="img/interior/saloon-3.jpg" onclick="selectInteriorImage(this);">
                        <img class="interiorImage" src="img/interior/saloon-4.jpg" onclick="selectInteriorImage(this);">
                        <img class="interiorImage" src="img/interior/saloon-5.jpg" onclick="selectInteriorImage(this);">
                    </div>
                </div>

                <div class="galleryContainer">
                    <div class="galleryTitle">Street View</div>
                    <div class="galleryContent">
                        <div class="arrow"  onclick="cycleExteriorImage(-1);">&#8249;</div>
                        <img id="exteriorMainImage" src="img/exterior/exterior1.png" onclick="zoomImage(this);">
                        <div class="arrow" onclick="cycleExteriorImage(1);">&#8250;</div>
                    </div>
                    <div class="gallerySelector">
                        <img id="activeExterior" class="exteriorImage" src="img/exterior/exterior1.png" onclick="selectExteriorImage(this);">
                        <img class="exteriorImage" src="img/exterior/exterior2.png" onclick="selectExteriorImage(this);">
                    </div>
                </div>

                <div id="mapLocation">
HTML;

       $html .= '<script defer
                    src="https://maps.googleapis.com/maps/api/js?key=' . $_ENV["GOOGLE_MAPS_API_KEY"] . '&callback=initMap"
                 ></script>';

        $html .= <<<HTML
                    <div id="mapTitle">Map Location</div>
                    <div id="googleMap"><!-- google map inserted here --></div>
                </div>
            </div>
HTML;

        return $html;
    }

    public function javascript() {
        return <<<HTML
            <script src="js/mainFunctions.js"></script>
            <script src="js/aboutFunctions.js"></script>
HTML;
    }
}
