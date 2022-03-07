<?php
namespace Foundation\Views;

class ServicesView extends View{
    public function __construct() {
        //set our page title
        $this->setTitle("Foundation - Services & Pricing!");

        //add our nav links
        $this->addLink("index.php", "About the Salon");
        $this->addLink("services.php", "Services & Pricing", true);
        // $this->addLink("team.php", "Meet Our Team");
        $this->addLink("gallery.php", "Gallery / Portfolio");
        $this->addLink("contact.php", "Contact Us");

    }

    public function showServicesAndPricing() {
        $html = '<div id="servicesWidget" class="widget">';
        $html .= $this->servicesText();
        $html .= '<div id="servicesContainer">';
        $html .= '<div id="instructionText">Please select from a service below</div>';
        $html .= '<div id="buttonsContainer">';
        $html .= '<div id="activeService" class="button" onclick="showCutTable(this);">Cut</div>';
        $html .= '<div class="button" onclick="showStyleTable(this);">Style</div>';
        $html .= '<div class="button" onclick="showColorTable(this);">Colour</div>';
        $html .= '</div>';
        $html .= '<div id="tableContainer">';
        $html .= $this->cutPricingTable();
        $html .= $this->stylePricingTable();
        $html .= $this->colorPricingTable();
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

    public function servicesText() {
        return <<<HTML
            <div id="servicesText">
                Foundation is synonymous with luxury hair care and we ensure our reputation of excellence is represented on every client leaving the salon.
            </div>
HTML;
    }

    public function cutPricingTable() {
        return <<< HTML
        <table id="cutTable">
            <thead>
                <tr>
                    <th class="service">CUT</th>
                    <th class="price">PRICE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="service">Director’s Cut</td>
                    <td class="price">€110.00</td>
                </tr>
                <tr>
                    <td class="service">Senior Stylist Cut</td>
                    <td class="price">€105.00</td>
                </tr>
                <tr>
                    <td class="service">Ladies Cut</td>
                    <td class="price">€93.50</td>
                </tr>
                <tr>
                    <td class="service">Gent’s Cut</td>
                    <td class="price">€58.00</td>
                </tr>
            </tbody>
        </table>
HTML;
    }

    public function stylePricingTable() {
        return <<< HTML
            <table id="styleTable">
                <thead>
                    <tr>
                        <th class="service">STYLE</th>
                        <th class="price">PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="service">Blowdry Card (5 short blowdries)</td>
                        <td class="price">€145.00</td>
                    </tr>
                    <tr>
                        <td class="service">Blowdry - Short</td>
                        <td class="price">€37.00</td>
                    </tr>
                    <tr>
                        <td class="service">Blowdry - Long Hair</td>
                        <td class="price">€40.00</td>
                    </tr>
                    <tr>
                        <td class="service">Set & Finish / Wand</td>
                        <td class="price">€47.00</td>
                    </tr>
                    <tr>
                        <td class="service">Dia Boost Blowdry</td>
                        <td class="price">€42.00</td>
                    </tr>
                </tbody>
            </table>
HTML;
    }

    public function colorPricingTable() {
        return <<<HTML
            <table id="colorTable">
                <thead>
                    <tr>
                        <th class="service">COLOUR</th>
                        <th class="price">PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="service">Full Head Highlights</td>
                        <td class="price">From €185.00</td>
                    </tr>
                    <tr>
                        <td class="service">3/4 Head Highlights</td>
                        <td class="price">From €150.00</td>
                    </tr>
                    <tr>
                        <td class="service">Half Head Highlights</td>
                        <td class="price">From €132.00</td>
                    </tr>
                    <tr>
                        <td class="service">Parting Highlights (1/4 head)</td>
                        <td class="price">From €103.00</td>
                    </tr>
                    <tr>
                        <td class="service">Floodlights/Brushlights</td>
                        <td class="price">From €55.00</td>
                    </tr>
                    <tr>
                        <td class="service">Full Tint</td>
                        <td class="price">From €93.50</td>
                    </tr>
                    <tr>
                        <td class="service">Tint Retouch</td>
                        <td class="price">From €82.50</td>
                    </tr>
                    <tr>
                        <td class="service">Upgrade To Illumina / Innocence</td>
                        <td class="price">€10.00</td>
                    </tr>
                    <tr>
                        <td class="service">Masking (Hairline)</td>
                        <td class="price">From €45.00</td>
                    </tr>
                    <tr>
                        <td class="service">Colour Gloss</td>
                        <td class="price">€20.00</td>
                    </tr>
                    <tr>
                        <td class="service">Quasi Permanent Colour</td>
                        <td class="price">From €74.00</td>
                    </tr>
                    <tr>
                        <td class="service">Semi Permanent Colour</td>
                        <td class="price">From €65.00</td>
                    </tr>
                    <tr>
                        <td class="service">Prelighten & Tone</td>
                        <td class="price">From €145.00</td>
                    </tr>
                    <tr>
                        <td class="service">Colour Correction</td>
                        <td class="price">Price on Consultation</td>
                    </tr>
                    <tr>
                        <td class="service">Treatments</td>
                        <td class="price">From €25.00</td>
                    </tr>
                    <tr>
                        <td class="service">Bodywave</td>
                        <td class="price">From €130.00</td>
                    </tr>
                    <tr>
                        <td class="service">Trichology Consultation</td>
                        <td class="price">€110.00</td>
                    </tr>
                    <tr>
                        <td class="service">Wig Fitting & Cut</td>
                        <td class="price">Price on Consultation</td>
                    </tr>
                    <tr>
                        <td class="service">Extensions</td>
                        <td class="price">Price on Consultation</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="fullRow">
                        All our colour services exclude Blow Dry
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="fullRow">
                        20% Student Discount Monday to Friday
                        </td>
                    </tr>
                </tbody>
            </table>
HTML;
    }

    public function javascript() {
        return <<<HTML
            <script src="js/mainFunctions.js"></script>
            <script src="js/servicesFunctions.js"></script>
HTML;
    }
}
