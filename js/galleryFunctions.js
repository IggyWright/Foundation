function zoomImage(img) {
    var zoomContainer = document.createElement("div");
    zoomContainer.id = "zoomContainer";
    zoomContainer.setAttribute("onclick", "closeImage(this);");

    var header = document.createElement("div");
    header.id = "zoomMessage";
    header.innerText = "Click Anywhere to Close!";

    var image = document.createElement("img");
    image.id = "zoomImage";
    image.src = img.children[0].src;

    zoomContainer.appendChild(header);
    zoomContainer.appendChild(image);

    document.getElementById("galleryWidget").appendChild(zoomContainer);

    //stop body/html from scrolling
    document.getElementsByTagName("body")[0].style.overflow = "hidden";

}

function closeImage(zoomContainer) {
    zoomContainer.remove();

    //allow body/html to scroll
    document.getElementsByTagName("body")[0].style.overflow = "scroll";
}
