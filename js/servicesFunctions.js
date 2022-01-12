function showCutTable(button) {
    document.getElementById("activeService").removeAttribute('id');
    button.id = "activeService";

    document.getElementById("styleTable").style.display = "none";
    document.getElementById("colorTable").style.display = "none";
    document.getElementById("cutTable").style.display = "table";
}

function showColorTable(button) {
    document.getElementById("activeService").removeAttribute('id');
    button.id = "activeService";

    document.getElementById("styleTable").style.display = "none";
    document.getElementById("cutTable").style.display = "none";
    document.getElementById("colorTable").style.display = "table";
}

function showStyleTable(button) {
    document.getElementById("activeService").removeAttribute('id');
    button.id = "activeService";

    document.getElementById("cutTable").style.display = "none";
    document.getElementById("colorTable").style.display = "none";
    document.getElementById("styleTable").style.display = "table";
}
