// Border Progressbar JS
$(function() {
    $('.chart').easyPieChart({
        size: 160,
        barColor: "#f29200",
        scaleLength: 0,
        lineWidth: 8,
        trackColor: "#f5f5f5",
        lineCap: "circle",
        animate: 3000,
    });
});

// Sticky Header JS

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.main-header').addClass('fixed-header');
    }
    else {
        $('.main-header').removeClass('fixed-header');
    }
});