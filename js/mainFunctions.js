setWidgetTop();

window.onresize = function() {
    setWidgetTop();
}

function setWidgetTop() {

    //determine navigation current height
    var nav = document.getElementById("navigation");
    var navHeight = window.getComputedStyle(nav).height;

    var ddNav = document.getElementById("dropdownNavHeader");
    var ddNavHeight = window.getComputedStyle(ddNav).height;

    if((parseInt(navHeight) <= 30) || (parseInt(ddNavHeight) <= 30)) {
        //set dd nav links and widget top to 30
        document.getElementById("dropdownNavLinks").style.top = "30px";
        document.getElementsByClassName("widget")[0].style.top = "30px";
    } else {
        //set dd nav links and widget top to 10vh
        document.getElementById("dropdownNavLinks").style.top = "10vh";
        document.getElementsByClassName("widget")[0].style.top = "10vh";
    }

}
