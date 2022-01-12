function showDropdownLinksAndChangeMenu() {
    //get container and show links
    container = document.getElementById("dropdownNavController");
    $('#dropdownNavLinks').css('display', 'flex');
    //change inner text
    container.children[0].innerHTML = "X";
    container.children[1].innerHTML = "Close";
    document.getElementById("dropdownNavHeader").onclick = hideDropdownLinksAndChangeMenu;

    //stop body/html from scrolling
    document.getElementsByTagName("body")[0].style.overflow = "hidden";
}

function hideDropdownLinksAndChangeMenu() {
    //get container and close links
    container = document.getElementById("dropdownNavController");
    $('#dropdownNavLinks').css('display', 'none');
    //change inner text
    container.children[0].innerHTML = "&#9776;";
    container.children[1].innerHTML = "Menu";
    document.getElementById("dropdownNavHeader").onclick = showDropdownLinksAndChangeMenu;

    //allow body/html to scroll
    document.getElementsByTagName("body")[0].style.overflow = "scroll";

}
