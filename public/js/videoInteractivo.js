var myvideo = document.getElementById('miVideo');

var videoCheckInterval;

$(".video-enlaces a").each(function() {
    $(this).click(function(e) {
        $(".video-controls").fadeOut();
        if (videoCheckInterval) {
            clearInterval(videoCheckInterval);
            videoCheckInterval = null;
        }
        e.preventDefault();
        var comienzo = parseInt($(this).data("comienzo"));
        var final = parseInt($(this).data("final"));
        myvideo.currentTime = comienzo;
        myvideo.play();
        videoCheckInterval = setInterval(function() {
            if(myvideo.currentTime >= final) {
                myvideo.currentTime = 252;
                myvideo.play();
                if (videoCheckInterval) {
                    clearInterval(videoCheckInterval);
                    videoCheckInterval = null;
                }
            }
        }, 100)
    })
});
