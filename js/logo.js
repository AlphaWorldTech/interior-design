function showlogo() {
    document.querySelector(".menuzord-menu").style.marginTop = -100 +
        "px";

    var mq = window.matchMedia("(max-width: 570px)");
    if (mq.matches) {
        document.querySelector(".pot1").style.display = "block";
        document.querySelector(".pot2").style.display = "none";
    } else {
        // window width is greater than 570px
        if (scrollY > 64) {
            // alert("hello");
            document.querySelector(".pot1").style.display = "block";
            document.querySelector(".pot2").style.display = "none";

        } else {
            document.querySelector(".pot1").style.display = "none";
            document.querySelector(".pot2").style.display = "block";


        }
    }

}

setInterval(showlogo, 100);