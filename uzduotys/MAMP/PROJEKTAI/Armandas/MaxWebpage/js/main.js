// loader
$(document).ready(
    function () {
        var preload = document.getElementById("preload");
        var loading = 0;
        var id = setInterval(frame, 6000);
        function frame()
        {
            window.scrollTo(0, 0);
            if (loading === 100) {
                clearInterval(id);
                document.getElementById("preload").style.display = "none";
            } else {
                loading = loading + 1;
                if (loading === 90) {
                    console.log("loading", loading);
                    preload.style.annimation = "fadeout 1s ease";
                }
            }
        }
});
