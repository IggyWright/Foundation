<?php
namespace Foundation\Views;

class ContactView extends View{
    public function __construct() {
        //set our page title
        $this->setTitle("Foundation - Contact Us!");

        //add our nav links
        $this->addLink("index.php", "About the Salon");
        $this->addLink("services.php", "Services & Pricing");
        // $this->addLink("team.php", "Meet Our Team");
        $this->addLink("gallery.php", "Gallery / Portfolio");
        $this->addLink("contact.php", "Contact Us", true);

    }

    public function presentContactForm() {
        $html = <<<HTML
            <div id="contactWidget" class="widget">
HTML;


        if(isset($_GET['s'])) {
            $html .= '<div id="successMessage">Email has been sent!</div>';
        } elseif (isset($_GET['e'])) {
            $html .= '<div id="errorMessage">Something went wrong sending the email, please try again.</div>';
        }

                $html .= <<<HTML
                <div class="title">Contact us in the following ways</div>
                <div id="infoContainer">
                    <div class="infoRow">
                        <div class="infoTitle">Address:</div>
                        <a class="infoDetail" href="https://www.google.com/maps/place/18+Stephen+Street+Upper,+Dublin,+D08+PTD0,+Ireland/@53.3414195,-6.2679526,17z/data=!3m1!4b1!4m5!3m4!1s0x48670e9d95c5159b:0x27bcc21e93490123!8m2!3d53.3414163!4d-6.2657586">
                            18 Upper Stephen's Street<br>
                            Dublin 8<br>
                            Ireland<br>
                        </a>
                    </div>
                    <div class="infoRow">
                        <div class="infoTitle">Phone:</div>
                        <a class="infoDetail" href="tel:35314781222">
                            +353 1 478 1222/1223
                        </a>
                    </div>
                    <div class="infoRow">
                        <div class="infoTitle">Email:</div>
                        <a class="infoDetail" href="mailto:support@foundationireland.com">support@foundationireland.com</a>
                    </div>
                    <div class="infoRow">
                        <div class="infoTitle">Our social media:</div>
                        <a class="infoDetail" href="https://www.facebook.com/foundationhairsalon/">
                            <img class="socialImage" src="img/contact/facebook.png">
                        </a>
                    </div>
                </div>

                <div class="title">Fill out the form below and we will respond as soon as possible</div>
                <form id="formContainer" method="post" action="post/contact.php">
                    <div class="formRow">
                        <label class="rowTitle" for="name">Your Name:</label>
                        <input class="rowInput" type="text" id="name" name="name">
                    </div>
                    <div class="formRow">
                        <label class="rowTitle" for="email">Your Email Address:</label>
                        <input class="rowInput" type="email" id="email" name="email">
                    </div>
                    <div class="formColumn">
                        <label id="messageTitle" class="rowTitle" for="message">Your Message:</label>
                        <textarea id="messageTextArea" name="message"></textarea>
                    </div>
                    <div class="formRow">
                        <button id="sendMessageButton" type="button" onclick="verifyAndSubmit();">Send Message</button>
                    </div>
                </form>
            </div>
HTML;

        return $html;
    }

    public function javascript() {
        return <<<HTML
            <script src="js/mainFunctions.js"></script>
            <script src="js/contactFunctions.js"></script>
HTML;
    }
}
