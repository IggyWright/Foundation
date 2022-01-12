<?php
namespace Foundation\Views;

/*The base View class that all pages will be built on*/
class View {
    /*Sets the tile of the page upon page creation*/
    public function setTitle($title) {
        $this->title = $title;
    }

    /*Return the head that all View classes will need*/
    /*Allow ability to add additional info per page in parameter*/
    public function head($additional="") {
        return <<<HTML
<head>
<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
<title>$this->title</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MCDK301WHV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MCDK301WHV');
</script>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
$additional
</head>
HTML;
    }

    /*Add a link that will appear on the nav bar*/
    /*Indicates if link is active or not*/
    public function addLink($href, $text, $active=false) {
        $this->links[] = ["href" => $href, "text" => $text, "active" => $active];
    }

    /*Return the navigation bar for our site*/
    public function navigation() {
        $html = <<< HTML
            <div id="navigation">
                <div class="logoContainer" onclick="javascript:location.href='index.php'">
                    <img class="logoImage" src="img/logo/logoIMAGE.jpg"></img>
                    <div class="logoText">Foundation</div>
                </div>
                <div id="navLinks">
HTML;

        if(count($this->links) > 0) {
            $html .= '<ul>';
            foreach(array_reverse($this->links) as $link) { //we array_reverse b/c link are right floated so adding them is backwards
                $html .= '<li>';
                //create link and indicate if this is active page
                $html .= '<a class="navCell" ';
                if($link['active']) {
                    $html .= 'id="active" ';
                }
                $html .= 'href="' . $link['href'] . '">' . $link['text'] . '</a></li>';
            }
            $html .= '</ul>';
        }

        $html .= <<< HTML
                </div>
            </div>
HTML;

        return $html;
    }

    function dropdownNavigation() {
        $html = <<< HTML
            <div id="dropdownNavigation">
                <div id="dropdownNavHeader" onclick="showDropdownLinksAndChangeMenu();">
                    <div class="logoContainer">
                        <img class="logoImage" src="img/logo/logoIMAGE.jpg"></img>
                        <div class="logoText">Foundation</div>
                    </div>
                    <div id="dropdownNavController">
                        <div id="dropdownNavButton">&#9776;</div>
                        <div id="dropdownNavText">Menu</div>
                    </div>
                </div>
                <div id="dropdownNavLinks" onclick="hideDropdownLinksAndChangeMenu();">
                    <div id="dropdownNavLinksContainer">
HTML;

        if(count($this->links) > 0) {
            $html .= '<ul>';
            foreach($this->links as $link) {
                $html .= '<li>';
                //create link and indicate if this is active page
                $html .= '<a class="dropdownNavCell" ';
                if($link['active']) {
                    $html .= 'id="active" ';
                }
                $html .= 'href="' . $link['href'] . '">' . $link['text'] . '</a></li>';
            }
            $html .= '</ul>';
        }

        $html .= <<< HTML
                    </div>
                </div>
            </div>

            <script src="js/navigationFunctions.js"></script>
HTML;

        return $html;
    }

    private $title = "";	// The page title
    private $links = [];	// Links to add to the nav bar
}
