window.onload = function() {
    cycleSlideShowImages();
}

function cycleSlideShowImages() {
    var delayInSeconds = 5;

    //get current slide banner right MUST KEEP GLOBAL TO changeImg()
    var bannerRight = $('#slideBanner').css("right");

    function changeImg() {
        //if under 400: add 100
        //else: reset to 0

        if(bannerRight != "400%") {
            bannerRight = (parseInt(bannerRight, 10) + 100).toString() + "%";
        } else {
            bannerRight = "0";
        }

        //set style
        $('#slideBanner').css({"right":bannerRight});
    }
    setInterval(changeImg, delayInSeconds * 1000);

}

function cycleInteriorImage(amount) {
    var interiorImages = document.getElementsByClassName("interiorImage");
    var indexOfActiveInterior = indexActiveInteriorImage();
    var newIndex = indexOfActiveInterior + amount;

    if(newIndex < 0) {
        selectInteriorImage(interiorImages[interiorImages.length-1]);
    } else if(newIndex >= interiorImages.length) {
        selectInteriorImage(interiorImages[0]);
    } else {
        selectInteriorImage(interiorImages[newIndex]);
    }
}

function indexActiveInteriorImage() {
    var interiorImages = document.getElementsByClassName("interiorImage");
    for(var i = 0; i < interiorImages.length; i++) {
        if(interiorImages[i].id === "activeInterior") {
            return i;
        }
    }
    return 0;
}

function selectInteriorImage(imgElem) {
    //remove active image id
    document.getElementById("activeInterior").removeAttribute('id');

    //set clicked img to active
    imgElem.id = "activeInterior";

    //replace the large image row innerHTML w/ clicked img HTML
    document.getElementById("interiorMainImage").src = imgElem.src;
}

function indexActiveExteriorImage() {
    var exteriorImages = document.getElementsByClassName("exteriorImage");
    for(var i = 0; i < exteriorImages.length; i++) {
        if(exteriorImages[i].id === "activeExterior") {
            return i;
        }
    }
    return 0;
}

function selectExteriorImage(imgElem) {
    //remove active image id
    document.getElementById("activeExterior").removeAttribute('id');

    //set clicked img to active
    imgElem.id = "activeExterior";

    //replace the large image row innerHTML w/ clicked img HTML
    document.getElementById("exteriorMainImage").src = imgElem.src;
}

function cycleExteriorImage(amount) {
    var exteriorImages = document.getElementsByClassName("exteriorImage");
    var indexOfActiveExterior = indexActiveExteriorImage();
    var newIndex = indexOfActiveExterior + amount;

    if(newIndex < 0) {
        selectExteriorImage(exteriorImages[exteriorImages.length-1]);
    } else if(newIndex >= exteriorImages.length) {
        selectExteriorImage(exteriorImages[0]);
    } else {
        selectExteriorImage(exteriorImages[newIndex]);
    }
}

function zoomImage(img) {
    var zoomContainer = document.createElement("div");
    zoomContainer.id = "zoomContainer";
    zoomContainer.setAttribute("onclick", "closeImage(this);");

    var header = document.createElement("div");
    header.id = "zoomMessage";
    header.innerText = "Click Anywhere to Close!";

    var image = document.createElement("img");
    image.id = "zoomImage";
    image.src = img.src;

    zoomContainer.appendChild(header);
    zoomContainer.appendChild(image);

    document.getElementById("aboutWidget").appendChild(zoomContainer);

    //stop body/html from scrolling
    document.getElementsByTagName("body")[0].style.overflow = "hidden";
}

function closeImage(zoomContainer) {
    zoomContainer.remove();

    //allow body/html to scroll
    document.getElementsByTagName("body")[0].style.overflow = "scroll";
}

function initMap() {
    // The location of Uluru
    const foundation = { lat: 53.341420, lng: -6.265760 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("googleMap"), {
        zoom: 15,
        center: foundation
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: foundation,
        map: map
    });

    const infowindow = new google.maps.InfoWindow();
    infowindow.setContent(
        "<div><strong>" +
        "18 Upper Stephen's Street" +
        "</strong><br>" +
        "Dublin 8" +
        "<br>" +
        "Ireland" +
        "</div>"
    );
    infowindow.open(map, marker);

    google.maps.event.addListener(marker, "click", function () {
        infowindow.open(map, this);
    });
}
