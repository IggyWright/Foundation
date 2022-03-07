<?php
namespace Foundation\Views;

class TeamView extends View{
    public function __construct() {
        //set our page title
        $this->setTitle("Foundation - Meet the Team!");

        //add our nav links
        $this->addLink("index.php", "About the Salon");
        $this->addLink("services.php", "Services & Pricing");
        // $this->addLink("team.php", "Meet Our Team", true);
        $this->addLink("gallery.php", "Gallery / Portfolio");
        $this->addLink("contact.php", "Contact Us");

    }

    public function showTeamWidget() {
        $html = <<<HTML
            <div id="teamWidget" class="widget">
                <div id="teamContainer">
HTML;

        $html .= $this->createTeamMember(
            "img/team/1.jpg",
            "Eóin Wright",
            "Eóin has established himself as one of the rising stars of Dublin's hair scene.
            Not only is he an awarded stylist and colourist, he is also one of Ireland's few qualified Trichologists (scalp/hair loss specialist).
            Eoin has worked with some of the top salons in Dublin.
            Training at Peter Hair Creation in Blackrock and cementing his career at Reds salon, Pzazz and as manager at Dylan Bradshaw.
            He has also plenty of international experience, working in London, Japan, Hong Kong and Australia."
        );

        $html .= $this->createTeamMember(
            "img/team/2.jpg",
            "Sean Dunne",
            "Before co-founding the salon with Eoin and Tony, Sean worked in Pzazz for over 10 years building his reputation as one of Dublin’s top stylists.
            He has also enjoyed two sabaticals abroad, working in The Crib salon in San Francisco and Sydney’s famous Fusion salon.
            Sean works closely with staff, training them in the latest cutting and colouring techniques."
        );

        $html .= $this->createTeamMember(
            "img/team/3.jpg",
            "Tony Mulvany",
            "Tony has been at the top of his career since it began.
            After training with David Marshall and later with Aidan Fitzgerald, he won the junior stylist of the year and was runner up as hairdresser of the year.
            The 2006 IHF Hair-dressing championships saw Tony win a number of awards including the prestigious Hair Dresser of the Year 2006.
            His reputation as a session stylist is unsurpassed, working on fashion shows, fashion magazines and on TV."
        );

        $html .= '<div class="remainingTeamContainer">';

        $html .= $this->createTeamMemberNoDescription(
            "img/team/4.jpg",
        );

        $html .= $this->createTeamMemberNoDescription(
            "img/team/5.jpg",
        );

        $html .= $this->createTeamMemberNoDescription(
            "img/team/6.jpg",
        );

        $html .= $this->createTeamMemberNoDescription(
            "img/team/7.jpg",
        );

        $html .= $this->createTeamMemberNoDescription(
            "img/team/8.jpg",
        );

        $html .= $this->createTeamMemberNoDescription(
            "img/team/9.jpg",
        );

        $html .= $this->createTeamMemberNoDescription(
            "img/team/10.jpg",
        );

        $html .= $this->createTeamMemberNoDescription(
            "img/team/11.jpg",
        );

        $html .= $this->createTeamMemberNoDescription(
            "img/team/12.jpg",
        );

        $html .= '</div>';

        $html .= <<<HTML

                </div>
            </div>
HTML;

        return $html;
    }

    private function createTeamMember($imgSource, $name, $description) {
        $html = <<<HTML
            <div class="individualMember">
                <div class="memberInfo">
HTML;
        $html .= '<img class="teamImage" src="' . $imgSource . '">';
        $html .= '<div class="nameLabel">' . $name . '</div>';

        $html .= <<<HTML
                </div>
                <div class="memberInfo">
HTML;
        $html .= '<div class="description">' . $description . '</div>';

        $html .= <<<HTML
                </div>
            </div>
HTML;

        return $html;
    }

    private function createTeamMemberNoDescription($imgSource) {
        $html = <<<HTML
            <div class="noDescriptionMember">
HTML;

        $html .= '<img class="teamImage" src="' . $imgSource . '">';
        //$html .= '<div class="nameLabel">' . $name . '</div>';

        $html .= <<<HTML
            </div>
HTML;

        return $html;
    }

    public function javascript() {
        return <<<HTML
            <script src="js/mainFunctions.js"></script>
HTML;
    }
}
